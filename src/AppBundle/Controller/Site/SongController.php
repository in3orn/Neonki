<?php

namespace AppBundle\Controller\Site;

use AppBundle\Controller\Site\Base\SiteEntityController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Song;
use AppBundle\Form\Filter\SongFilterType;
use AppBundle\Entity\Filter\SongFilter;
use AppBundle\Entity\Stage;

class SongController extends SiteEntityController
{
	protected function createNewFilter() {
		$repository = $this->getDoctrine()->getRepository(Stage::class);
		$filter = new SongFilter($repository);
	
		return $filter;
	}
	
	protected function getFilterFormType() {
		return SongFilterType::class;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SiteEntityController::getEntityType()
	 */
	protected function getEntityType()
	{
		return Song::class;
	}
}
