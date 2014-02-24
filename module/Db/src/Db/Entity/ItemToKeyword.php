<?php

namespace Db\Entity;

/**
 * ItemToKeyword
 */
class ItemToKeyword
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Db\Entity\Keyword
     */
    private $keyword;

    /**
     * @var \Db\Entity\Item
     */
    private $item;


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
     * Set keyword
     *
     * @param \Db\Entity\Keyword $keyword
     *
     * @return ItemToKeyword
     */
    public function setKeyword(\Db\Entity\Keyword $keyword = null)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return \Db\Entity\Keyword 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set item
     *
     * @param \Db\Entity\Item $item
     *
     * @return ItemToKeyword
     */
    public function setItem(\Db\Entity\Item $item = null)
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

