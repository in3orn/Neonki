<?php

namespace AppBundle\Controller\Site;

use AppBundle\Controller\Site\Base\SiteEntityController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Song;

class SongController extends SiteEntityController
{
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
