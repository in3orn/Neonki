<?php

namespace AppBundle\Entity\Filter;

use AppBundle\Entity\Filter\Base\SimpleEntityFilter;
use AppBundle\Repository\StageRepository;
use Symfony\Component\HttpFoundation\Request;

class SubjectFilter extends SimpleEntityFilter {
	
	/**
	 * 
	 * @param StageRepository $stageRepository
	 */
	public function __construct(StageRepository $stageRepository) {
		$this->stageRepository = $stageRepository;
	}
	
	/**
	 * @var StageRepository
	 */
	protected $stageRepository;
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::initMoreValues()
	 */
	protected function initMoreValues(Request $request) {
		$stages = $request->get('stages', null);
		if($stages)
			$this->stages = $this->stageRepository->findBy(array('id' => $stages));
		
		return $this;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::clearMoreQueryValues()
	 */
	protected function clearMoreQueryValues() {
		$this->stages = array();
		
		return $this;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::getValues()
	 */
	public function getValues() {
		$values = parent::getValues();
		$values['stages'] = $this->getIdValues($this->stages);
		
		return $values;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::getExpressions()
	 */
	protected function getExpressions() {
		$expressions = parent::getExpressions();
		
		$expression = $this->getEqualArrayExpression('stage', $this->stages);
		if($expression)
			$expressions[] = $expression;
		
		return $expressions;
	}
	
	/**
	 * @var array
	 */
	protected $stages;
	
	/**
	 * Add stage
	 *
	 * @param $stage
	 *
	 * @return SongFilter
	 */
	public function addStage($stage)
	{
		$this->stages[] = $stage;
	
		return $this;
	}
	
	/**
	 * Set stages
	 *
	 * @return SongFilter
	 */
	public function setStages($stages)
	{
		$this->stages = $stages;
		
		return $this;
	}
	
	/**
	 * Get stages
	 *
	 * @return array
	 */
	public function getStages()
	{
		return $this->stages;
	}
	
	/**
	 * Clear stages
	 *
	 * @return SongFilter
	 */
	public function clearStages()
	{
		$this->stages = array();
	
		return $this;
	}
}