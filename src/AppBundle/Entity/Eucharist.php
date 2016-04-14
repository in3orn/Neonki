<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\SimpleEntity;

/**
 * Eucharist
 * 
 * @author inb
 *
 */
class Eucharist extends SimpleEntity
{
    
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $info;

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
    private $siglumGos;

    /**
     * @var \AppBundle\Entity\Group
     */
    private $group;

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
    private $introGosBy;

    /**
     * @var \AppBundle\Entity\User
     */
    private $breadBy;

    /**
     * @var \AppBundle\Entity\User
     */
    private $prayerBy;

    /**
     * @var \AppBundle\Entity\User
     */
    private $flowersBy;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songInt;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songPce;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songBr1;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songBr2;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songBr3;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songWn1;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songWn2;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songWn3;

    /**
     * @var \AppBundle\Entity\Song
     */
    private $songOut;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Eucharist
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
     * Set info
     *
     * @param string $info
     *
     * @return Eucharist
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set siglum1st
     *
     * @param string $siglum1st
     *
     * @return Eucharist
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
     * @return Eucharist
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
     * Set siglumGos
     *
     * @param string $siglumGos
     *
     * @return Eucharist
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
     * @return Eucharist
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
     * Set introIntBy
     *
     * @param \AppBundle\Entity\User $introIntBy
     *
     * @return Eucharist
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
     * @return Eucharist
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
     * @return Eucharist
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
     * Set introGosBy
     *
     * @param \AppBundle\Entity\User $introGosBy
     *
     * @return Eucharist
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
     * Set breadBy
     *
     * @param \AppBundle\Entity\User $breadBy
     *
     * @return Eucharist
     */
    public function setBreadBy(\AppBundle\Entity\User $breadBy = null)
    {
        $this->breadBy = $breadBy;

        return $this;
    }

    /**
     * Get breadBy
     *
     * @return \AppBundle\Entity\User
     */
    public function getBreadBy()
    {
        return $this->breadBy;
    }

    /**
     * Set prayerBy
     *
     * @param \AppBundle\Entity\User $prayerBy
     *
     * @return Eucharist
     */
    public function setPrayerBy(\AppBundle\Entity\User $prayerBy = null)
    {
        $this->prayerBy = $prayerBy;

        return $this;
    }

    /**
     * Get prayerBy
     *
     * @return \AppBundle\Entity\User
     */
    public function getPrayerBy()
    {
        return $this->prayerBy;
    }

    /**
     * Set flowersBy
     *
     * @param \AppBundle\Entity\User $flowersBy
     *
     * @return Eucharist
     */
    public function setFlowersBy(\AppBundle\Entity\User $flowersBy = null)
    {
        $this->flowersBy = $flowersBy;

        return $this;
    }

    /**
     * Get flowersBy
     *
     * @return \AppBundle\Entity\User
     */
    public function getFlowersBy()
    {
        return $this->flowersBy;
    }

    /**
     * Set songInt
     *
     * @param \AppBundle\Entity\Song $songInt
     *
     * @return Eucharist
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
     * Set songPce
     *
     * @param \AppBundle\Entity\Song $songPce
     *
     * @return Eucharist
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
     * Set songBr1
     *
     * @param \AppBundle\Entity\Song $songBr1
     *
     * @return Eucharist
     */
    public function setSongBr1(\AppBundle\Entity\Song $songBr1 = null)
    {
        $this->songBr1 = $songBr1;

        return $this;
    }

    /**
     * Get songBr1
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSongBr1()
    {
        return $this->songBr1;
    }

    /**
     * Set songBr2
     *
     * @param \AppBundle\Entity\Song $songBr2
     *
     * @return Eucharist
     */
    public function setSongBr2(\AppBundle\Entity\Song $songBr2 = null)
    {
        $this->songBr2 = $songBr2;

        return $this;
    }

    /**
     * Get songBr2
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSongBr2()
    {
        return $this->songBr2;
    }

    /**
     * Set songBr3
     *
     * @param \AppBundle\Entity\Song $songBr3
     *
     * @return Eucharist
     */
    public function setSongBr3(\AppBundle\Entity\Song $songBr3 = null)
    {
        $this->songBr3 = $songBr3;

        return $this;
    }

    /**
     * Get songBr3
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSongBr3()
    {
        return $this->songBr3;
    }

    /**
     * Set songWn1
     *
     * @param \AppBundle\Entity\Song $songWn1
     *
     * @return Eucharist
     */
    public function setSongWn1(\AppBundle\Entity\Song $songWn1 = null)
    {
        $this->songWn1 = $songWn1;

        return $this;
    }

    /**
     * Get songWn1
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSongWn1()
    {
        return $this->songWn1;
    }

    /**
     * Set songWn2
     *
     * @param \AppBundle\Entity\Song $songWn2
     *
     * @return Eucharist
     */
    public function setSongWn2(\AppBundle\Entity\Song $songWn2 = null)
    {
        $this->songWn2 = $songWn2;

        return $this;
    }

    /**
     * Get songWn2
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSongWn2()
    {
        return $this->songWn2;
    }

    /**
     * Set songWn3
     *
     * @param \AppBundle\Entity\Song $songWn3
     *
     * @return Eucharist
     */
    public function setSongWn3(\AppBundle\Entity\Song $songWn3 = null)
    {
        $this->songWn3 = $songWn3;

        return $this;
    }

    /**
     * Get songWn3
     *
     * @return \AppBundle\Entity\Song
     */
    public function getSongWn3()
    {
        return $this->songWn3;
    }

    /**
     * Set songOut
     *
     * @param \AppBundle\Entity\Song $songOut
     *
     * @return Eucharist
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
    /**
     * @var string
     */
    private $siglumRes;

    /**
     * @var string
     */
    private $siglumAkl;


    /**
     * Set siglumRes
     *
     * @param string $siglumRes
     *
     * @return Eucharist
     */
    public function setSiglumRes($siglumRes)
    {
        $this->siglumRes = $siglumRes;

        return $this;
    }

    /**
     * Get siglumRes
     *
     * @return string
     */
    public function getSiglumRes()
    {
        return $this->siglumRes;
    }

    /**
     * Set siglumAkl
     *
     * @param string $siglumAkl
     *
     * @return Eucharist
     */
    public function setSiglumAkl($siglumAkl)
    {
        $this->siglumAkl = $siglumAkl;

        return $this;
    }

    /**
     * Get siglumAkl
     *
     * @return string
     */
    public function getSiglumAkl()
    {
        return $this->siglumAkl;
    }
}
