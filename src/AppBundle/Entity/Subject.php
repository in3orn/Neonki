<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\SimpleEntity;

/**
 * Subject
 * 
 * @author inb
 *
 */
class Subject extends SimpleEntity
{
    
    /**
     * @var string
     */
    private $content;

    /**
     * @var \AppBundle\Entity\Stage
     */
    private $stage;


    /**
     * Set content
     *
     * @param string $content
     *
     * @return Subject
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
     * @return Subject
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
