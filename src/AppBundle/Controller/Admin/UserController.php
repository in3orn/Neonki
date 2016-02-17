<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Controller\Admin\Base\SimpleEntityController;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Filter\UserFilter;
use AppBundle\Entity\Group;
use AppBundle\Form\Filter\UserFilterType;
use AppBundle\Form\Lists\UserListType;

class UserController extends SimpleEntityController {
	
	//------------------------------------------------------------------------
	// Entity creators
	//------------------------------------------------------------------------
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::createNewEntity()
	 */
	protected function createNewEntity(Request $request) {
		return new User();
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::createNewFilter()
	 */
	protected function createNewFilter() {
		$groupRepository = $this->getDoctrine()->getRepository(Group::class);
		return new UserFilter($groupRepository);
	}
	
	
	//------------------------------------------------------------------------
	// Entity types
	//------------------------------------------------------------------------
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::getEntityType()
	 */
	protected function getEntityType() {
		return User::class;
	}
	
	
	//------------------------------------------------------------------------
	// Form types
	//------------------------------------------------------------------------
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::getFormType()
	 */
	protected function getFormType() {
		return UserType::class;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::getListFormType()
	 */
	protected function getListFormType() {
		return UserListType::class;
	}
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::getFilterFormType()
	 */
	protected function getFilterFormType() {
		return UserFilterType::class;
	}
}