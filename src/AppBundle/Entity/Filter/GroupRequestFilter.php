<?php

namespace AppBundle\Entity\Filter;

use AppBundle\Entity\Filter\Base\SimpleEntityFilter;
use AppBundle\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;

class GroupRequestFilter extends SimpleEntityFilter {
	
	/**
	 * 
	 * @param UserRepository $userRepository
	 */
	public function __construct(UserRepository $userRepository) {
		$this->userRepository = $userRepository;
	}
	
	/**
	 * @var UserRepository
	 */
	protected $userRepository;
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::initMoreValues()
	 */
	protected function initMoreValues(Request $request) {
		$senders = $request->get('senders', null);
		if($senders) {
			$this->senders = $this->userRepository->findBy(array('id' => $senders));
		}
		
		$receivers = $request->get('receivers', null);
		if($receivers) {
			$this->receivers = $this->userRepository->findBy(array('id' => $receivers));
		}
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::clearMoreQueryValues()
	 */
	protected function clearMoreQueryValues() {
		$this->senders = array();
		$this->receivers = array();
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::getValues()
	 */
	public function getValues() {
		$values = parent::getValues();
		$values['senders'] = $this->getIdValues($this->senders);
		$values['receivers'] = $this->getIdValues($this->receivers);
		
		return $values;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::getExpressions()
	 */
	protected function getExpressions() {
		$expressions = parent::getExpressions();
		
		$expression = $this->getEqualArrayExpression('sender', $this->senders);
		if($expression)
			$expressions[] = $expression;
			
		$expression = $this->getEqualArrayExpression('receiver', $this->receivers);
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
		return 'ORDER BY e.createdAt DESC';
	}
	
	/**
	 * @var array
	 */
	protected $senders;
	
	/**
	 * @var array
	 */
	protected $receivers;
	
	/**
	 * Add sender
	 *
	 * @param $sender
	 *
	 * @return GroupRequestFilter
	 */
	public function addSender($sender)
	{
		$this->senders[] = $sender;
	
		return $this;
	}
	
	/**
	 * Set senders
	 *
	 * @return GroupRequestFilter
	 */
	public function setSenders($senders)
	{
		$this->senders = $senders;
		
		return $this;
	}
	
	/**
	 * Get senders
	 *
	 * @return array
	 */
	public function getSenders()
	{
		return $this->senders;
	}
	
	/**
	 * Clear senders
	 *
	 * @return GroupRequestFilter
	 */
	public function clearSenders()
	{
		$this->senders = array();
	
		return $this;
	}
	
	/**
	 * Add receiver
	 *
	 * @param $receiver
	 *
	 * @return GroupRequestFilter
	 */
	public function addReceiver($receiver)
	{
		$this->receivers[] = $receiver;
	
		return $this;
	}
	
	/**
	 * Set receivers
	 *
	 * @return GroupRequestFilter
	 */
	public function setReceivers($receivers)
	{
		$this->receivers = $receivers;
		
		return $this;
	}
	
	/**
	 * Get receivers
	 *
	 * @return array
	 */
	public function getReceivers()
	{
		return $this->receivers;
	}
	
	/**
	 * Clear receivers
	 *
	 * @return GroupRequestFilter
	 */
	public function clearReceivers()
	{
		$this->receivers = array();
	
		return $this;
	}
}