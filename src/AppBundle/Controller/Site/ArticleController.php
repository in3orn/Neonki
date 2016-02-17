<?php

namespace AppBundle\Controller\Site;

use AppBundle\Controller\Site\Base\SiteEntityController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Article;

class ArticleController extends SiteEntityController
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SimpleEntityController::getEntityType()
	 */
	protected function getEntityType()
	{
		return Article::class;
	}
}
