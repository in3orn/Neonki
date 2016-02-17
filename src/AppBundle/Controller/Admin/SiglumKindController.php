<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Controller\Admin\Base\SimpleEntityController;
use AppBundle\Entity\SiglumKind;
use AppBundle\Form\SiglumKindType;
use Symfony\Component\HttpFoundation\Request;

class SiglumKindController extends SimpleEntityController {
	
	//------------------------------------------------------------------------
	// Entity creators
	//------------------------------------------------------------------------
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::createNewEntity()
	 */
	protected function createNewEntity(Request $request) {
		return new SiglumKind();
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
		return SiglumKind::class;
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
		return SiglumKindType::class;
	}
}