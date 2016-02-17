<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Controller\Admin\Base\SimpleEntityController;
use AppBundle\Entity\Song;
use AppBundle\Entity\Stage;
use AppBundle\Form\SongType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Filter\SongFilter;
use AppBundle\Form\Filter\SongFilterType;

class SongController extends SimpleEntityController {
	
	//------------------------------------------------------------------------
	// Entity creators
	//------------------------------------------------------------------------
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::createNewEntity()
	 */
	protected function createNewEntity(Request $request) {
		return new Song();
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::createNewFilter()
	 */
	protected function createNewFilter() {
		$repository = $this->getDoctrine()->getRepository(Stage::class);
		return new SongFilter($repository);
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
		return Song::class;
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
		return SongType::class;
	}
	
	/**
	 * Get entity filter class (e.g <strong>SimpleEntityFilterType::class</strong>)
	 *
	 * @return mixed
	 */
	protected function getFilterFormType() {
		return SongFilterType::class;
	}
}