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
}
