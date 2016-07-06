<?php

namespace AppBundle\Entity\Filter;

use AppBundle\Entity\Filter\Base\SimpleEntityFilter;
use AppBundle\Repository\SubjectRepository;
use Symfony\Component\HttpFoundation\Request;

class SiglumFilter extends SimpleEntityFilter {
	
	/**
	 * 
	 * @param SubjectRepository $subjectRepository
	 */
	public function __construct(SubjectRepository $subjectRepository) {
		$this->subjectRepository = $subjectRepository;
	}
	
	/**
	 * @var SubjectRepository
	 */
	protected $subjectRepository;
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::initMoreValues()
	 */
	protected function initMoreValues(Request $request) {
		$subjects = $request->get('subjects', null);
		if($subjects)
			$this->subjects = $this->subjectRepository->findBy(array('id' => $subjects));
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::clearMoreQueryValues()
	 */
	protected function clearMoreQueryValues() {
		$this->subjects = array();
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::getValues()
	 */
	public function getValues() {
		$values = parent::getValues();
		$values['subjects'] = $this->getIdValues($this->subjects);
		$values['kinds'] = $this->getIdValues($this->kinds);
		
		return $values;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::getExpressions()
	 */
	protected function getExpressions() {
		$expressions = parent::getExpressions();
		
		$expression = $this->getEqualArrayExpression('subject', $this->subjects);
		if($expression)
			$expressions[] = $expression;
			
		$expression = $this->getEqualArrayExpression('kind', $this->kinds);
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
		return ' ORDER BY e.orderNumber ASC ';
	}
	
	/**
	 * @var array
	 */
	protected $subjects;
	
	/**
	 * Add subject
	 *
	 * @param $subject
	 *
	 * @return SiglumFilter
	 */
	public function addSubject($subject)
	{
		$this->subjects[] = $subject;
	
		return $this;
	}
	
	/**
	 * Set subjects
	 *
	 * @return SiglumFilter
	 */
	public function setSubjects($subjects)
	{
		$this->subjects = $subjects;
		
		return $this;
	}
	
	/**
	 * Get subjects
	 *
	 * @return array
	 */
	public function getSubjects()
	{
		return $this->subjects;
	}
	
	/**
	 * Clear subjects
	 *
	 * @return SiglumFilter
	 */
	public function clearSubjects()
	{
		$this->subjects = array();
	
		return $this;
	}
	
	/**
	 * @var array
	 */
	protected $kinds;
	
	/**
	 * Add kind
	 *
	 * @param $kind
	 *
	 * @return SiglumFilter
	 */
	public function addKind($kind)
	{
		$this->kinds[] = $kind;
	
		return $this;
	}
	
	/**
	 * Set kinds
	 *
	 * @return SiglumFilter
	 */
	public function setKinds($kinds)
	{
		$this->kinds = $kinds;
		
		return $this;
	}
	
	/**
	 * Get kinds
	 *
	 * @return array
	 */
	public function getKinds()
	{
		return $this->kinds;
	}
	
	/**
	 * Clear kinds
	 *
	 * @return SiglumFilter
	 */
	public function clearKinds()
	{
		$this->kinds = array();
	
		return $this;
	}
}