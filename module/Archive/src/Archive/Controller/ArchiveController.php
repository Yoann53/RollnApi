<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2013 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace Archive\Controller;

use Zend\View\Model\ViewModel;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\DBAL\Schema\Table;
use Doctrine\ORM\EntityManager;
use Zend\Console\ColorInterface;
use Zend\Console\Request as ConsoleRequest;
use Zend\EventManager\EventManagerInterface;
use Zend\Mvc\Controller\AbstractActionController;
use ZF\Configuration\ConfigResource;
use Zend\Config\Writer\PhpArray as PhpArrayWriter;
use Zend\Filter\FilterChain;
use Zend\Console\Adapter\AdapterInterface as Console;
use Zend\Console\Prompt;
use Doctrine\DBAL\DBALException;
use Application\Feed\Feed;
use Zend\Http\Client;
use Zend\Http\Request;

use Db\Entity\Item as ItemEntity;
use Db\Entity\Category as CategoryEntity;
use Db\Entity\Keyword as KeywordEntity;
use Db\Entity\Enclosure as EnclosureEntity;
use Db\Entity\EnclosureType as EnclosureTypeEntity;
use Db\Entity\ItemToKeyword as ItemToKeywordEntity;

class ArchiveController extends AbstractActionController
{
    /**
     * Fetch a page of RSS results and save to file
     *
     * @param page integer
     */
    public function fetchPageAction()
    {
        $startDate = '1970-01-01';
        $endDate = '2014-02-23';
        $page = $this->getRequest()->getParams()['page'];
        $rows = 500;

        $file = __DIR__ . '/../../../../../data/RSS/' . $page . '.rss';

        if (file_exists($file)) {
            try {
                $rss = Feed::loadRssFile("file://$file");

                foreach ($rss->item as $rssItem) {
                    // If an rss item exists do not fetch file
                    return "RSS items exist in page $page\n";
                }
            } catch (\Exception $e) {

            }
        }

        $url = 'https://archive.org/advancedsearch.php?q=createdate%3A['
            . $startDate . '+TO+'
            . $endDate . ']+&fl[]=identifier&sort[]=createdate+asc&sort[]=&sort[]=&rows='
            . $rows . '&page=' . $page
            . '&callback=callback&save=yes&output=rss#raw';
        file_put_contents($file, fopen($url, 'r'));

        return "$page.rss created\n";
    }

    /**
     * Import a local RSS file (from fetchPage) into the database.
     *
     * Existing identifiers are ignored
     * and only new identifiers will be imported
     */
    public function importRssAction()
    {
        try {
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');

        $page  = $this->getRequest()->getParams()['page'];
        $file = __DIR__ . '/../../../../../data/RSS/' . $page . '.rss';

        if (!file_exists($file)) {
            die('file not found');
            throw new \Exception("File $file not found");
        }

        $rss = Feed::loadRssFile("file://$file");

        foreach ($rss->item as $rssItem) {
            $identifier = substr($rssItem->guid, 28);
            $item = $entityManager->getRepository('Db\Entity\Item')->findOneBy(array(
                'guid' => $identifier,
            ));

            if ($item) continue;

            $category = $entityManager->getRepository('Db\Entity\Category')->findOneBy(array(
                'name' => $rssItem->category
            ));

            if (!$category) {
                $category = new CategoryEntity;
                $category->setName($rssItem->category);
                $entityManager->persist($category);
            }

            $item = new ItemEntity;
            $item->setGuid(substr($rssItem->guid, 28));
            $item->setTitle($rssItem->title);
            $item->setDescription($rssItem->description);
            $item->setLink($rssItem->link);
            $item->setCategory($category);
            $pubDate = date_create_from_format('D, d M Y H:i:s O', $rssItem->pubDate);
            if ($pubDate instanceof \DateTime) {
                $item->setPubDate($pubDate);
            }

            $http = new Client();
            $request = new Request();

            $identifier = substr($rssItem->guid, 28);
            $request->setUri("http://www.archive.org/services/find_file.php?file=$identifier");
            $request->setMethod(Request::METHOD_GET);

            try {
                $response = $http->dispatch($request);
                $dir = substr($http->getUri()->getQuery(), 4);
                $url = 'https://' . $http->getUri()->getHost() . $dir;
                $item->setUrl($url);
            } catch (\Exception $e) {
# Instead of logging misses run
#                error_log("$identifier\n", 3, __DIR__ . '/../../../../../data/Log/find-file-fail.log');
            }

            $entityManager->persist($item);

            // Import Keywords
            $node = "media:keywords";
            if ($rssItem->$node) {
                foreach (explode(',', $rssItem->$node) as $rssKeyword) {
                    $keyword = $entityManager->getRepository('Db\Entity\Keyword')->findOneBy(array(
                        'name' => trim($rssKeyword)
                    ));

                    if (!$keyword) {
                        $keyword = new KeywordEntity;
                        $keyword->setName(trim($rssKeyword));
                        $entityManager->persist($keyword);
                    }

                    $itemToKeyword = new ItemToKeywordEntity;
                    $itemToKeyword->setItem($item);
                    $itemToKeyword->setKeyword($keyword);
                    $entityManager->persist($itemToKeyword);
                }
            }

            // Import Enclosures
            foreach ($rssItem->enclosure as $rssEnclosure) {
                $enclosure = new EnclosureEntity;
                foreach($rssEnclosure->attributes() as $name => $value) {
                    switch($name) {
                        case 'url':
                            $enclosure->setUrl($value);
                            break;
                        case 'length':
                            $enclosure->setLength($value);
                            break;
                        case 'type':
                            $enclosureType = $entityManager->getRepository('Db\Entity\EnclosureType')->findOneBy(array(
                                'name' => $value
                            ));
                            if (!$enclosureType) {
                                $enclosureType = new EnclosureTypeEntity();
                                $enclosureType->setName($value);
                                $entityManager->persist($enclosureType);
                            }

                            $enclosure->setEnclosureType($enclosureType);
                            break;
                        default:
                            break;
                    }

                    $enclosure->setItem($item);
                    $entityManager->persist($enclosure);

                }
            }

            $entityManager->flush();
            echo $rssItem->title . "\n";
        }

    } catch (\Exception $e) {
        die($e->getMessage());
    }

        return "\nFinished $file\n";

    }

    /**
     * Try to find files for all items with no url.
     * This is a data-cleanup function.  Use after importRss to fix
     * timed-out location lookups.
     */
    public function findFileAction()
    {
        $entityManager = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');

        $qb = $entityManager->createQueryBuilder();
        $qb->select('i');
        $qb->from('Db\Entity\Item', 'i');
        $qb->where($qb->expr()->isNull('i.url'));

        foreach ($qb->getQuery()->getResult() as $item) {

            $http = new Client();
            $request = new Request();

            $request->setUri("http://www.archive.org/services/find_file.php?file=" . $item->getGuid());
            $request->setMethod(Request::METHOD_GET);

            try {
                $response = $http->dispatch($request);
                $dir = substr($http->getUri()->getQuery(), 4);
                $url = 'https://' . $http->getUri()->getHost() . $dir;
                $item->setUrl($url);
                $entityManager->flush();
                echo "Found " . $item->getGuid() . "\n";
            } catch (\Exception $e) {
# No need to log errors, just re-run
#                error_log("$identifier\n", 3, __DIR__ . '/../../../../../data/Log/retry-find-file-fail.log');
            }
        }

        return "done";
    }
}

