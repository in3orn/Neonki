<?php

namespace AppBundle\Controller\Site;

use AppBundle\Controller\Site\Base\SiteEntityController;
use AppBundle\Entity\GroupRequest;
use AppBundle\Form\GroupRequestType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GroupRequestController extends SiteEntityController
{	
	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SiteEntityController::createNewEntity()
	 */
	protected function createNewEntity(Request $request) {
		$entry = new GroupRequest();
		
		$sender = $this->get('security.token_storage')->getToken()->getUser();
		$entry->setSender($sender);
	
		return $entry;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SimpleEntityController::getEntityType()
	 */
	protected function getEntityType()
	{
		return GroupRequest::class;
	}

	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SiteEntityController::getFormType()
	 */
	protected function getFormType() {
		return GroupRequestType::class;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SiteEntityController::getIndexRoute()
	 */
	protected function getIndexRoute() {
		return 'site_user_show';
	}
}
