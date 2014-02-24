<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2013 Zend Technologies USA Inc. (http://www.zend.com)
 */

return array(
    'controllers' => array(
        'invokables' => array(
            'Archive\Controller\Archive' => 'Archive\Controller\ArchiveController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Console routes
    'console' => array(
        'router' => array(
            'routes' => array(
                'fetch-page' => array(
                    'options' => array(
                        'route' => 'fetch page <page>',
                        'defaults' => array(
                            'controller' => 'Archive\Controller\Archive',
                            'action'     => 'fetchPage',
                        ),
                    ),
                ),
                'import-rss' => array(
                    'options' => array(
                        'route' => 'import rss <page>',
                        'defaults' => array(
                            'controller' => 'Archive\Controller\Archive',
                            'action'     => 'importRss',
                        ),
                    ),
                ),
                'find-file' => array(
                    'options' => array(
                        'route' => 'find file',
                        'defaults' => array(
                            'controller' => 'Archive\Controller\Archive',
                            'action'     => 'findFile',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
