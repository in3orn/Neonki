<?php

namespace AppBundle\Entity\Filter;

use AppBundle\Entity\Filter\Base\SimpleEntityFilter;
use AppBundle\Repository\GroupRepository;
use Symfony\Component\HttpFoundation\Request;

class UserFilter extends SimpleEntityFilter {
	
	/**
	 * 
	 * @param GroupRepository $groupRepository
	 */
	public function __construct(GroupRepository $groupRepository) {
		$this->groupRepository = $groupRepository;
	}
	
	/**
	 * @var GroupRepository
	 */
	protected $groupRepository;
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::initMoreValues()
	 */
	protected function initMoreValues(Request $request) {
		$groups = $request->get('groups', null);
		if($groups)
			$this->groups = $this->groupRepository->findBy(array('id' => $groups));
		
		return $this;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::clearMoreQueryValues()
	 */
	protected function clearMoreQueryValues() {
		$this->groups = array();
		
		return $this;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::getValues()
	 */
	public function getValues() {
		$values = parent::getValues();
		$values['groups'] = $this->getIdValues($this->groups);
		
		return $values;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::getExpressions()
	 */
	protected function getExpressions() {
		$expressions = parent::getExpressions();
		
		$expression = $this->getEqualArrayExpression('group', $this->groups);
		if($expression)
			$expressions[] = $expression;
		
		return $expressions;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::getOrderByExpression()
	 */
	public function getOrderByExpression() {
		return ' ORDER BY e.username ASC ';
	}
	
	/**
	 * @var array
	 */
	protected $groups;
	
	/**
	 * Add group
	 *
	 * @param $group
	 *
	 * @return UserFilter
	 */
	public function addGroup($group)
	{
		$this->groups[] = $group;
	
		return $this;
	}
	
	/**
	 * Set groups
	 *
	 * @return UserFilter
	 */
	public function setGroups($groups)
	{
		$this->groups = $groups;
		
		return $this;
	}
	
	/**
	 * Get groups
	 *
	 * @return array
	 */
	public function getGroups()
	{
		return $this->groups;
	}
	
	/**
	 * Clear groups
	 *
	 * @return UserFilter
	 */
	public function clearGroups()
	{
		$this->groups = array();
	
		return $this;
	}
}