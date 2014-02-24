<?php

namespace Db\Entity;

/**
 * EnclosureType
 */
class EnclosureType
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
    private $enclosure;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->enclosure = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return EnclosureType
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
     * Add enclosure
     *
     * @param \Db\Entity\Enclosure $enclosure
     *
     * @return EnclosureType
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
}

