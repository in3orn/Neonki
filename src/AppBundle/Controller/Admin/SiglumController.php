<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Controller\Admin\Base\SimpleEntityController;
use AppBundle\Entity\Siglum;
use AppBundle\Form\SiglumType;
use Symfony\Component\HttpFoundation\Request;

class SiglumController extends SimpleEntityController {
	
	//------------------------------------------------------------------------
	// Entity creators
	//------------------------------------------------------------------------
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::createNewEntity()
	 */
	protected function createNewEntity(Request $request) {
		return new Siglum();
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
		return Siglum::class;
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
		return SiglumType::class;
	}
}