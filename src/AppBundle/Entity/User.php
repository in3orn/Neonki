<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 * 
 * @author inb
 *
 */
class User extends BaseUser
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
}
