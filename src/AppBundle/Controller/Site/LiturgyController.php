<?php

namespace AppBundle\Controller\Site;

use AppBundle\Controller\Site\Base\GroupEntityController;
use AppBundle\Controller\Site\Base\SiteEntityController;
use AppBundle\Entity\Filter\LiturgyFilter;
use AppBundle\Entity\Group;
use AppBundle\Entity\Liturgy;
use AppBundle\Entity\Subject;
use AppBundle\Form\LiturgyType;
use AppBundle\Repository\GroupRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LiturgyController extends GroupEntityController
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SiteEntityController::createNewEntity()
	 */
	protected function createNewEntity(Request $request) {
		$liturgy = new Liturgy();
		
		$groupRepository = $this->getDoctrine()->getRepository(Group::class); 
		
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$groupId = $user->getGroup()->getId();
		$group = $groupRepository->find($groupId);
		
		$liturgy->setGroup($group);
		
		$subjectId = $request->get('subject', null);
		if ($subjectId) {
			$subjectRepository = $this->getDoctrine()->getRepository(Subject::class);
			$subject = $subjectRepository->find($subjectId);
			
			$liturgy->setSubject($subject);
		}
		
		return $liturgy;
	}
	
	protected function createGroupFilter(GroupRepository $groupRepository) {
		return new LiturgyFilter($groupRepository);
	}
	
	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SiteEntityController::getEntityType()
	 */
	protected function getEntityType()
	{
		return Liturgy::class;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SiteEntityController::getFormType()
	 */
	protected function getFormType() {
		return LiturgyType::class;
	}
}
