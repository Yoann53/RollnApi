<?php

namespace Db\Entity;

/**
 * Item
 */
class Item
{
    /**
     * @var string
     */
    private $guid;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $link;

    /**
     * @var \DateTime
     */
    private $pubDate;

    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $enclosure;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $itemToKeyword;

    /**
     * @var \Db\Entity\Category
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enclosure = new \Doctrine\Common\Collections\ArrayCollection();
        $this->itemToKeyword = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set guid
     *
     * @param string $guid
     *
     * @return Item
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return string 
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Item
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Item
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set pubDate
     *
     * @param \DateTime $pubDate
     *
     * @return Item
     */
    public function setPubDate($pubDate)
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    /**
     * Get pubDate
     *
     * @return \DateTime 
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Item
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add enclosure
     *
     * @param \Db\Entity\Enclosure $enclosure
     *
     * @return Item
     */
    public function addEnclosure(\Db\Entity\Enclosure $enclosure)
    {
        $this->enclosure[] = $enclosure;

        return $this;
    }

    /**
     * Remove enclosure
     *
     * @param \Db\Entity\Enclosure $enclosure
     */
    public function removeEnclosure(\Db\Entity\Enclosure $enclosure)
    {
        $this->enclosure->removeElement($enclosure);
    }

    /**
     * Get enclosure
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnclosure()
    {
        return $this->enclosure;
    }

    /**
     * Add itemToKeyword
     *
     * @param \Db\Entity\ItemToKeyword $itemToKeyword
     *
     * @return Item
     */
    public function addItemToKeyword(\Db\Entity\ItemToKeyword $itemToKeyword)
    {
        $this->itemToKeyword[] = $itemToKeyword;

        return $this;
    }

    /**
     * Remove itemToKeyword
     *
     * @param \Db\Entity\ItemToKeyword $itemToKeyword
     */
    public function removeItemToKeyword(\Db\Entity\ItemToKeyword $itemToKeyword)
    {
        $this->itemToKeyword->removeElement($itemToKeyword);
    }

    /**
     * Get itemToKeyword
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItemToKeyword()
    {
        return $this->itemToKeyword;
    }

    /**
     * Set category
     *
     * @param \Db\Entity\Category $category
     *
     * @return Item
     */
    public function setCategory(\Db\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Db\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}

