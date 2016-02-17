<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\SimpleEntity;

/**
 * Siglum
 * 
 * @author inb
 *
 */
class Siglum extends SimpleEntity
{
	
    /**
     * @var \AppBundle\Entity\SiglumKind
     */
    private $kind;

    /**
     * @var \AppBundle\Entity\Subject
     */
    private $subject;


    /**
     * Set kind
     *
     * @param \AppBundle\Entity\SiglumKind $kind
     *
     * @return Siglum
     */
    public function setKind(\AppBundle\Entity\SiglumKind $kind = null)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind
     *
     * @return \AppBundle\Entity\SiglumKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Set subject
     *
     * @param \AppBundle\Entity\Subject $subject
     *
     * @return Siglum
     */
    public function setSubject(\AppBundle\Entity\Subject $subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \AppBundle\Entity\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }
}
