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
		
		$this->colorUser = $request->get('colorUser', 0) > 0;
		$this->showUserOnly = $request->get('showUserOnly', 0) > 0;
		
		$this->showPsalms = $request->get('showPsalms', 0) > 0;
		$this->showSongOfSongs = $request->get('showSongOfSongs', 0) > 0;
	
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
		
		$this->showPsalms = false;
		$this->showSongOfSongs = false;
	
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
		
		$values['showPsalms'] = $this->showPsalms;
		$values['showSongOfSongs'] = $this->showSongOfSongs;
	
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
	 * @var boolean
	 */
	private $showPsalms;
	
	/**
	 * @var boolean
	 */
	private $showSongOfSongs;
	
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
	
	/**
	 * Set showPsalms
	 *
	 * @param boolean $showPsalms
	 *
	 * @return SiglumRenderer
	 */
	public function setShowPsalms($showPsalms = null)
	{
		$this->showPsalms = $showPsalms;
	
		return $this;
	}
	
	/**
	 * Is showPsalms
	 *
	 * @return boolean
	 */
	public function isShowPsalms()
	{
		return $this->showPsalms;
	}
	
	/**
	 * Set showSongOfSongs
	 *
	 * @param boolean $showSongOfSongs
	 *
	 * @return SiglumRenderer
	 */
	public function setShowSongOfSongs($showSongOfSongs = null)
	{
		$this->showSongOfSongs = $showSongOfSongs;
	
		return $this;
	}
	
	/**
	 * Is showSongOfSongs
	 *
	 * @return boolean
	 */
	public function isShowSongOfSongs()
	{
		return $this->showSongOfSongs;
	}
}