<?php

namespace Db\Entity;

/**
 * Keyword
 */
class Keyword
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $itemToKeyword;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->itemToKeyword = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Keyword
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Add itemToKeyword
     *
     * @param \Db\Entity\ItemToKeyword $itemToKeyword
     *
     * @return Keyword
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
}

