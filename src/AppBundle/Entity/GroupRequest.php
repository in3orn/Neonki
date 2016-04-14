<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\Audit;

/**
 * GroupRequest
 * 
 * @author inb
 *
 */
class GroupRequest extends Audit
{
	
    /**
     * @var \AppBundle\Entity\User
     */
    private $sender;

    /**
     * @var \AppBundle\Entity\User
     */
    private $receiver;


    /**
     * Set sender
     *
     * @param \AppBundle\Entity\User $sender
     *
     * @return GroupRequest
     */
    public function setSender(\AppBundle\Entity\User $sender = null)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return \AppBundle\Entity\User
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param \AppBundle\Entity\User $receiver
     *
     * @return GroupRequest
     */
    public function setReceiver(\AppBundle\Entity\User $receiver = null)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return \AppBundle\Entity\User
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
    /**
     * @var string
     */
    private $id;


    /**
     * Set id
     *
     * @param string $id
     *
     * @return GroupRequest
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
