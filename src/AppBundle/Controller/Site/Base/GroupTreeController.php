<?php

namespace AppBundle\Controller\Site\Base;

use AppBundle\Controller\Site\Base\SiteEntityController;
use AppBundle\Entity\Group;
use AppBundle\Repository\GroupRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Filter\Base\GroupEntityFilter;

abstract class GroupTreeController extends SiteEntityController
{	
	
	/**
	 * Create new filter (e.g <strong>new SimpleEntityFilter()</strong>)
	 *
	 * @return mixed
	 */
	protected function createNewFilter() {
		$groupRepository = $this->getDoctrine()->getRepository(Group::class);
		$filter = $this->createGroupFilter($groupRepository);
		
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$groupId = $user->getGroup()->getId();
		$group = $groupRepository->find($groupId);
		
		$groups = array();
		$groups = $this->addWithParent($groups, $group);
		
		$filter->setGroups($groups);
		
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
