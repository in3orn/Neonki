<?php

namespace AppBundle\Controller\Site\Base;

use AppBundle\Controller\Site\Base\SiteEntityController;
use AppBundle\Entity\Group;
use AppBundle\Repository\GroupRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Filter\Base\GroupEntityFilter;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Filter\Base\SimpleEntityFilter;

abstract class GroupEntityController extends SiteEntityController
{	
	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::updateFilter()
	 */
	protected function updateFilter(Request $request, SimpleEntityFilter $filter) {
		$groupRepository = $this->getDoctrine()->getRepository(Group::class);
		
		$user = $this->get('security.token_storage')->getToken()->getUser();
		
		$group = new Group();
		$group->setId(-1);
		
		if($user->getGroup()) {
			$groupId = $user->getGroup()->getId();
			$group = $groupRepository->find($groupId);
		}
		$filter->setGroups([$group]);
	
		return $filter;
	}
	
	/**
	 * Create new filter (e.g <strong>new SimpleEntityFilter()</strong>)
	 *
	 * @return mixed
	 */
	protected function createNewFilter() {
		$groupRepository = $this->getDoctrine()->getRepository(Group::class);
		$filter = $this->createGroupFilter($groupRepository);
		
		return $filter;
	}
	
	/**
	 * 
	 * @param GroupRepository $groupRepository
	 * @return \AppBundle\Entity\Filter\GroupFilter
	 */
	protected function createGroupFilter(GroupRepository $groupRepository) {
		return new GroupEntityFilter($groupRepository);
	}
}
