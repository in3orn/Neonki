<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\SimpleEntity;

/**
 * Liturgy
 * 
 * @author inb
 *
 */
class Liturgy extends SimpleEntity
{
    
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $siglum1st;

    /**
     * @var string
     */
    private $siglum2nd;

    /**
     * @var string
     */
    private $siglum3rd;

    /**
     * @var string
     */
    private $siglumGos;

    /**
     * @var \AppBundle\Entity\Group
     */
    private $group;

    /**
     * @var \AppBundle\Entity\Subject
     */
    private $subject;

    /**
     * @var \AppBundle\Entity\User
     */
    private $introIntBy;

    /**
     * @var \AppBundle\Entity\User
     */
    private $intro1stBy;

    /**
     * @var \AppBundle\Entity\User
     */
    private $intro2ndBy;

    /**
     * @var \AppBundle\Entity\User
     */
    private $intro3rdBy;

    /**
     * @var \AppBundle\Entity\User
     */
    private $introGosBy;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songInt;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $song1st;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $song2nd;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $song3rd;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songPce;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songOut;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Liturgy
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set siglum1st
     *
     * @param string $siglum1st
     *
     * @return Liturgy
     */
    public function setSiglum1st($siglum1st)
    {
        $this->siglum1st = $siglum1st;

        return $this;
    }

    /**
     * Get siglum1st
     *
     * @return string
     */
    public function getSiglum1st()
    {
        return $this->siglum1st;
    }

    /**
     * Set siglum2nd
     *
     * @param string $siglum2nd
     *
     * @return Liturgy
     */
    public function setSiglum2nd($siglum2nd)
    {
        $this->siglum2nd = $siglum2nd;

        return $this;
    }

    /**
     * Get siglum2nd
     *
     * @return string
     */
    public function getSiglum2nd()
    {
        return $this->siglum2nd;
    }

    /**
     * Set siglum3rd
     *
     * @param string $siglum3rd
     *
     * @return Liturgy
     */
    public function setSiglum3rd($siglum3rd)
    {
        $this->siglum3rd = $siglum3rd;

        return $this;
    }

    /**
     * Get siglum3rd
     *
     * @return string
     */
    public function getSiglum3rd()
    {
        return $this->siglum3rd;
    }

    /**
     * Set siglumGos
     *
     * @param string $siglumGos
     *
     * @return Liturgy
     */
    public function setSiglumGos($siglumGos)
    {
        $this->siglumGos = $siglumGos;

        return $this;
    }

    /**
     * Get siglumGos
     *
     * @return string
     */
    public function getSiglumGos()
    {
        return $this->siglumGos;
    }

    /**
     * Set group
     *
     * @param \AppBundle\Entity\Group $group
     *
     * @return Liturgy
     */
    public function setGroup(\AppBundle\Entity\Group $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \AppBundle\Entity\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set subject
     *
     * @param \AppBundle\Entity\Subject $subject
     *
     * @return Liturgy
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

    /**
     * Set introIntBy
     *
     * @param \AppBundle\Entity\User $introIntBy
     *
     * @return Liturgy
     */
    public function setIntroIntBy(\AppBundle\Entity\User $introIntBy = null)
    {
        $this->introIntBy = $introIntBy;

        return $this;
    }

    /**
     * Get introIntBy
     *
     * @return \AppBundle\Entity\User
     */
    public function getIntroIntBy()
    {
        return $this->introIntBy;
    }

    /**
     * Set intro1stBy
     *
     * @param \AppBundle\Entity\User $intro1stBy
     *
     * @return Liturgy
     */
    public function setIntro1stBy(\AppBundle\Entity\User $intro1stBy = null)
    {
        $this->intro1stBy = $intro1stBy;

        return $this;
    }

    /**
     * Get intro1stBy
     *
     * @return \AppBundle\Entity\User
     */
    public function getIntro1stBy()
    {
        return $this->intro1stBy;
    }

    /**
     * Set intro2ndBy
     *
     * @param \AppBundle\Entity\User $intro2ndBy
     *
     * @return Liturgy
     */
    public function setIntro2ndBy(\AppBundle\Entity\User $intro2ndBy = null)
    {
        $this->intro2ndBy = $intro2ndBy;

        return $this;
    }

    /**
     * Get intro2ndBy
     *
     * @return \AppBundle\Entity\User
     */
    public function getIntro2ndBy()
    {
        return $this->intro2ndBy;
    }

    /**
     * Set intro3rdBy
     *
     * @param \AppBundle\Entity\User $intro3rdBy
     *
     * @return Liturgy
     */
    public function setIntro3rdBy(\AppBundle\Entity\User $intro3rdBy = null)
    {
        $this->intro3rdBy = $intro3rdBy;

        return $this;
    }

    /**
     * Get intro3rdBy
     *
     * @return \AppBundle\Entity\User
     */
    public function getIntro3rdBy()
    {
        return $this->intro3rdBy;
    }

    /**
     * Set introGosBy
     *
     * @param \AppBundle\Entity\User $introGosBy
     *
     * @return Liturgy
     */
    public function setIntroGosBy(\AppBundle\Entity\User $introGosBy = null)
    {
        $this->introGosBy = $introGosBy;

        return $this;
    }

    /**
     * Get introGosBy
     *
     * @return \AppBundle\Entity\User
     */
    public function getIntroGosBy()
    {
        return $this->introGosBy;
    }

    /**
     * Set songInt
     *
     * @param \AppBundle\Entity\Song $songInt
     *
     * @return Liturgy
     */
    public function setSongInt(\AppBundle\Entity\Song $songInt = null)
    {
        $this->songInt = $songInt;

        return $this;
    }

    /**
     * Get songInt
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSongInt()
    {
        return $this->songInt;
    }

    /**
     * Set song1st
     *
     * @param \AppBundle\Entity\Song $song1st
     *
     * @return Liturgy
     */
    public function setSong1st(\AppBundle\Entity\Song $song1st = null)
    {
        $this->song1st = $song1st;

        return $this;
    }

    /**
     * Get song1st
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSong1st()
    {
        return $this->song1st;
    }

    /**
     * Set song2nd
     *
     * @param \AppBundle\Entity\Song $song2nd
     *
     * @return Liturgy
     */
    public function setSong2nd(\AppBundle\Entity\Song $song2nd = null)
    {
        $this->song2nd = $song2nd;

        return $this;
    }

    /**
     * Get song2nd
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSong2nd()
    {
        return $this->song2nd;
    }

    /**
     * Set song3rd
     *
     * @param \AppBundle\Entity\Song $song3rd
     *
     * @return Liturgy
     */
    public function setSong3rd(\AppBundle\Entity\Song $song3rd = null)
    {
        $this->song3rd = $song3rd;

        return $this;
    }

    /**
     * Get song3rd
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSong3rd()
    {
        return $this->song3rd;
    }

    /**
     * Set songPce
     *
     * @param \AppBundle\Entity\Song $songPce
     *
     * @return Liturgy
     */
    public function setSongPce(\AppBundle\Entity\Song $songPce = null)
    {
        $this->songPce = $songPce;

        return $this;
    }

    /**
     * Get songPce
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSongPce()
    {
        return $this->songPce;
    }

    /**
     * Set songOut
     *
     * @param \AppBundle\Entity\Song $songOut
     *
     * @return Liturgy
     */
    public function setSongOut(\AppBundle\Entity\Song $songOut = null)
    {
        $this->songOut = $songOut;

        return $this;
    }

    /**
     * Get songOut
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSongOut()
    {
        return $this->songOut;
    }
}
