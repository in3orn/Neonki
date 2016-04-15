<?php

namespace AppBundle\Controller\Site;

use AppBundle\Controller\Site\Base\SiteEntityController;
use AppBundle\Entity\GroupRequest;
use AppBundle\Form\GroupRequestType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Filter\GroupRequestFilter;
use AppBundle\Entity\User;

class GroupRequestController extends SiteEntityController
{	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SiteEntityController::initTwigParams()
	 */
	protected function initTwigParams(Request $request) {
		$params = parent::initTwigParams($request);

		$sent = $request->get('senders', null);
		
		$params['sent'] = $sent != null;
		
		return $params;
	}
	
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
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::createNewFilter()
	 */
	protected function createNewFilter() {
		$userRepository = $this->getDoctrine()->getRepository(User::class);
		return new GroupRequestFilter($userRepository);
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
