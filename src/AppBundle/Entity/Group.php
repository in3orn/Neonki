<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\ImageTree;

/**
 * Group
 * 
 * @author inb
 *
 */
class Group extends ImageTree
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Base\Image::getUploadPath()
	 */
	public function getUploadPath()
	{
		return '../web/uploads/groups';
	}
	
    /**
     * @var string
     */
    private $content;

    /**
     * @var \AppBundle\Entity\Stage
     */
    private $stage;

    /**
     * @var \AppBundle\Entity\Group
     */
    private $parent;


    /**
     * Set content
     *
     * @param string $content
     *
     * @return Group
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
     * @return Group
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
     * Set parent
     *
     * @param \AppBundle\Entity\Group $parent
     *
     * @return Group
     */
    public function setParent(\AppBundle\Entity\Group $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\Group
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Group
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
