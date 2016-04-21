<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use AppBundle\Entity\Dependent\GroupDependent;

/**
 * User
 * 
 * @author inb
 *
 */
class User extends BaseUser implements GroupDependent
{
	const ROLE_EDITOR = 'ROLE_EDITOR';
	const ROLE_RESPONSIBLE = 'ROLE_RESPONSIBLE';
	const ROLE_MAIN_RESPONSIBLE = 'ROLE_MAIN_RESPONSIBLE';
	const ROLE_ADMIN = 'ROLE_ADMIN';
	const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';
    /**
     * @var \AppBundle\Entity\Group
     */
    private $group;


    /**
     * Set group
     *
     * @param \AppBundle\Entity\Group $group
     *
     * @return User
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $sentRequests;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $receivedRequests;


    /**
     * Add sentRequest
     *
     * @param \AppBundle\Entity\GroupRequest $sentRequest
     *
     * @return User
     */
    public function addSentRequest(\AppBundle\Entity\GroupRequest $sentRequest)
    {
        $this->sentRequests[] = $sentRequest;

        return $this;
    }

    /**
     * Remove sentRequest
     *
     * @param \AppBundle\Entity\GroupRequest $sentRequest
     */
    public function removeSentRequest(\AppBundle\Entity\GroupRequest $sentRequest)
    {
        $this->sentRequests->removeElement($sentRequest);
    }

    /**
     * Get sentRequests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSentRequests()
    {
        return $this->sentRequests;
    }

    /**
     * Add receivedRequest
     *
     * @param \AppBundle\Entity\GroupRequest $receivedRequest
     *
     * @return User
     */
    public function addReceivedRequest(\AppBundle\Entity\GroupRequest $receivedRequest)
    {
        $this->receivedRequests[] = $receivedRequest;

        return $this;
    }

    /**
     * Remove receivedRequest
     *
     * @param \AppBundle\Entity\GroupRequest $receivedRequest
     */
    public function removeReceivedRequest(\AppBundle\Entity\GroupRequest $receivedRequest)
    {
        $this->receivedRequests->removeElement($receivedRequest);
    }

    /**
     * Get receivedRequests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReceivedRequests()
    {
        return $this->receivedRequests;
    }
}
