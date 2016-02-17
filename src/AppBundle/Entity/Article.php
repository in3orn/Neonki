<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Base\ImageEntity;

/**
 * Article
 * 
 * @author inb
 *
 */
class Article extends ImageEntity
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Base\Image::getUploadPath()
	 */
	public function getUploadPath()
	{
		return '../web/uploads/articles';
	}
	
    /**
     * @var string
     */
    private $content;

    /**
     * @var \AppBundle\Entity\Group
     */
    private $group;


    /**
     * Set content
     *
     * @param string $content
     *
     * @return Article
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
     * Set group
     *
     * @param \AppBundle\Entity\Group $group
     *
     * @return Article
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
