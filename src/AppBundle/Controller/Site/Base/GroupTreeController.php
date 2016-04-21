<?php

namespace AppBundle\Controller\Site\Base;

use AppBundle\Controller\Site\Base\SiteEntityController;
use AppBundle\Entity\Group;
use AppBundle\Repository\GroupRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Filter\Base\GroupEntityFilter;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Filter\Base\SimpleEntityFilter;

abstract class GroupTreeController extends SiteEntityController
{	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::updateFilter()
	 */
	protected function updateFilter(Request $request, SimpleEntityFilter $filter) {
		$groupRepository = $this->getDoctrine()->getRepository(Group::class);
		
		$user = $this->get('security.token_storage')->getToken()->getUser();
		
		$dummy = new Group();
		$dummy->setId(-1);
		$groups = [$dummy];
		
		if($user->getGroup()) {
			$groupId = $user->getGroup()->getId();
			$group = $groupRepository->find($groupId);
				
			$groups = array();
			$groups = $this->addWithParent($groups, $group);
		}
		$filter->setGroups($groups);
		
		return $filter;
	}
	
	/**
	 * Create new filter (e.g <strong>new SimpleEntityFilter()</strong>)
	 *
	 * @return mixed
	 */
	protected function createNewFilter() {
		$groupRepository = $this->getDoctrine()->getRepository(Group::class);
		$filter = new GroupEntityFilter($groupRepository);
		
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
	
	protected function addWithParent($list, $entry) {
		array_unshift($list, $entry);
		 
		if($entry->getParent() != null) {
			$list = $this->addWithParent($list, $entry->getParent());
		}
		 
		return $list;
	}
}
