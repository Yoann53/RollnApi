<?php

namespace Db\Entity;

/**
 * Enclosure
 */
class Enclosure
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $length;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\EnclosureType
     */
    private $enclosureType;

    /**
     * @var \Db\Entity\Item
     */
    private $item;


    /**
     * Set url
     *
     * @param string $url
     *
     * @return Enclosure
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
     * Set length
     *
     * @param integer $length
     *
     * @return Enclosure
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer 
     */
    public function getLength()
    {
        return $this->length;
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
     * Set enclosureType
     *
     * @param \Db\Entity\EnclosureType $enclosureType
     *
     * @return Enclosure
     */
    public function setEnclosureType(\Db\Entity\EnclosureType $enclosureType)
    {
        $this->enclosureType = $enclosureType;

        return $this;
    }

    /**
     * Get enclosureType
     *
     * @return \Db\Entity\EnclosureType 
     */
    public function getEnclosureType()
    {
        return $this->enclosureType;
    }

    /**
     * Set item
     *
     * @param \Db\Entity\Item $item
     *
     * @return Enclosure
     */
    public function setItem(\Db\Entity\Item $item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \Db\Entity\Item 
     */
    public function getItem()
    {
        return $this->item;
    }
}

