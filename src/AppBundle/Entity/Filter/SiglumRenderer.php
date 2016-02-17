<?php

namespace AppBundle\Entity\Filter;

use AppBundle\Entity\Filter\Base\BaseEntityFilter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\UnsupportedException;

class SiglumRenderer extends BaseEntityFilter
{	
	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\BaseEntityFilter::initValues()
	 */
	public function initValues(Request $request) {
		$this->actUser = $request->get('actUser', null);
		$this->maxUser = $request->get('maxUser', null);
		
		$colorUser = $request->get('colorUser', 0);
		$this->colorUser = $colorUser > 0;
		$showUserOnly = $request->get('showUserOnly', 0);
		$this->showUserOnly = $showUserOnly > 0;
	
		return $this;
	}
	
	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\BaseEntityFilter::clearQueryValues()
	 */
	public function clearQueryValues() {
		$this->name = null;
	
		$this->actUser = null;
		$this->maxUser = null;
		$this->colorUser = false;
		$this->showUserOnly = false;
	
		return $this;
	}
	
	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\BaseEntityFilter::getValues()
	 */
	public function getValues() {
		$values = array();
	
		$values['actUser'] = $this->actUser;
		$values['maxUser'] = $this->maxUser;
		$values['colorUser'] = $this->colorUser;
		$values['showUserOnly'] = $this->showUserOnly;
	
		return $values;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\BaseEntityFilter::getExpressions()
	 */
	protected function getExpressions()
	{
		throw UnsupportedException("Database queries are not supported for renderer.");
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\BaseEntityFilter::getOrderByExpression()
	 */
	public function getOrderByExpression()
	{
		throw UnsupportedException("Database queries are not supported for renderer.");
	}
	
	/**
	 * @var integer
	 */
	private $actUser;
	
	/**
	 * @var integer
	 */
	private $maxUser;
	
	/**
	 * @var boolean
	 */
	private $colorUser;
	
	/**
	 * @var boolean
	 */
	private $showUserOnly;
	
	/**
	 * Set actUser
	 *
	 * @param integer $actUser
	 *
	 * @return SiglumRenderer
	 */
	public function setActUser($actUser = null)
	{
		$this->actUser = $actUser;
	
		return $this;
	}
	
	/**
	 * Get actUser
	 *
	 * @return integer
	 */
	public function getActUser()
	{
		return $this->actUser;
	}
	
	/**
	 * Set maxUser
	 *
	 * @param integer $maxUser
	 *
	 * @return SiglumRenderer
	 */
	public function setMaxUser($maxUser = null)
	{
		$this->maxUser = $maxUser;
	
		return $this;
	}
	
	/**
	 * Get maxUser
	 *
	 * @return integer
	 */
	public function getMaxUser()
	{
		return $this->maxUser;
	}
	
	/**
	 * Set colorUser
	 *
	 * @param boolean $colorUser
	 *
	 * @return SiglumRenderer
	 */
	public function setColorUser($colorUser = null)
	{
		$this->colorUser = $colorUser;
	
		return $this;
	}
	
	/**
	 * Is colorUser
	 *
	 * @return boolean
	 */
	public function isColorUser()
	{
		return $this->colorUser;
	}
	
	/**
	 * Set showUserOnly
	 *
	 * @param boolean $showUserOnly
	 *
	 * @return SiglumRenderer
	 */
	public function setShowUserOnly($showUserOnly = null)
	{
		$this->showUserOnly = $showUserOnly;
	
		return $this;
	}
	
	/**
	 * Is showUserOnly
	 *
	 * @return boolean
	 */
	public function isShowUserOnly()
	{
		return $this->showUserOnly;
	}
}