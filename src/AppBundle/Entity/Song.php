<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\SimpleEntity;

/**
 * Song
 * 
 * @author inb
 *
 */
class Song extends SimpleEntity
{	
    /**
     * @var integer
     */
    private $site;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \AppBundle\Entity\Stage
     */
    private $stage;
    
    /**
     * Set site
     *
     * @param integer $site
     *
     * @return Song
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return integer
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Song
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set stage
     *
     * @param \AppBundle\Entity\Stage $stage
     *
     * @return Song
     */
    public function setStage(\AppBundle\Entity\Stage $stage = null)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return \AppBundle\Entity\Stage
     */
    public function getStage()
    {
        return $this->stage;
    }
    /**
     * @var string
     */
    private $website;

    /**
     * @var boolean
     */
    private $liturgical;

    /**
     * @var boolean
     */
    private $forPeace;

    /**
     * @var boolean
     */
    private $forBread;

    /**
     * @var boolean
     */
    private $forWine;


    /**
     * Set website
     *
     * @param string $website
     *
     * @return Song
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set liturgical
     *
     * @param boolean $liturgical
     *
     * @return Song
     */
    public function setLiturgical($liturgical)
    {
        $this->liturgical = $liturgical;

        return $this;
    }

    /**
     * Get liturgical
     *
     * @return boolean
     */
    public function getLiturgical()
    {
        return $this->liturgical;
    }

    /**
     * Set forPeace
     *
     * @param boolean $forPeace
     *
     * @return Song
     */
    public function setForPeace($forPeace)
    {
        $this->forPeace = $forPeace;

        return $this;
    }

    /**
     * Get forPeace
     *
     * @return boolean
     */
    public function getForPeace()
    {
        return $this->forPeace;
    }

    /**
     * Set forBread
     *
     * @param boolean $forBread
     *
     * @return Song
     */
    public function setForBread($forBread)
    {
        $this->forBread = $forBread;

        return $this;
    }

    /**
     * Get forBread
     *
     * @return boolean
     */
    public function getForBread()
    {
        return $this->forBread;
    }

    /**
     * Set forWine
     *
     * @param boolean $forWine
     *
     * @return Song
     */
    public function setForWine($forWine)
    {
        $this->forWine = $forWine;

        return $this;
    }

    /**
     * Get forWine
     *
     * @return boolean
     */
    public function getForWine()
    {
        return $this->forWine;
    }
}
