<?php

namespace AppBundle\Controller\Site;

use AppBundle\Controller\Site\Base\GroupEntityController;
use AppBundle\Controller\Site\Base\SiteEntityController;
use AppBundle\Entity\Eucharist;
use AppBundle\Entity\Group;
use AppBundle\Form\EucharistType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EucharistController extends GroupEntityController
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SiteEntityController::createNewEntity()
	 */
	protected function createNewEntity(Request $request) {
		$eucharist = new Eucharist();
		
		$groupRepository = $this->getDoctrine()->getRepository(Group::class); 
		
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$groupId = $user->getGroup()->getId();
		$group = $groupRepository->find($groupId);
		
		$eucharist->setGroup($group);
		
		return $eucharist;
	}
	
	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SiteEntityController::getEntityType()
	 */
	protected function getEntityType()
	{
		return Eucharist::class;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SiteEntityController::getFormType()
	 */
	protected function getFormType() {
		return EucharistType::class;
	}
}
