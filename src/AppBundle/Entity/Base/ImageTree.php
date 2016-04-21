<?php

namespace AppBundle\Entity\Base;

class ImageTree extends Image
{
    
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var string
     */
    private $treePath;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return ImageTree
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return ImageTree
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set treePath
     *
     * @param string $treePath
     *
     * @return ImageTree
     */
    public function setTreePath($treePath)
    {
        $this->treePath = $treePath;

        return $this;
    }

    /**
     * Get treePath
     *
     * @return string
     */
    public function getTreePath()
    {
        return $this->treePath;
    }

    /**
     * 
     * @param integer $id
     * @return \AppBundle\Entity\Base\ImageTree
     */
    public function setId($id)
    {
    	$this->id = $id;
    	return $this;
    }
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
