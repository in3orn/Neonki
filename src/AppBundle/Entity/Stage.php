<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\SimpleEntity;

/**
 * Stage
 * 
 * @author inb
 *
 */
class Stage extends SimpleEntity
{
    /**
     * @var integer
     */
    private $number;

    /**
     * @var boolean
     */
    private $main;


    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Stage
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set main
     *
     * @param boolean $main
     *
     * @return Stage
     */
    public function setMain($main)
    {
        $this->main = $main;

        return $this;
    }

    /**
     * Get main
     *
     * @return boolean
     */
    public function getMain()
    {
        return $this->main;
    }
}
