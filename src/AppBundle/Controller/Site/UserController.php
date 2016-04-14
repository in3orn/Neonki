<?php

namespace AppBundle\Controller\Site;

use AppBundle\Controller\Site\Base\SiteEntityController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Entity\Filter\UserFilter;
use AppBundle\Repository\GroupRepository;
use AppBundle\Entity\Group;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;

class UserController extends SiteEntityController
{	
	public function showAction(Request $request, $id)
	{
		$entry = $this->get('security.token_storage')->getToken()->getUser();
		return $this->render($this->getTwigShow(), array('entry' => $entry));
	}
	
	public function addAction(Request $request, $id)
	{
		$responsible = $this->get('security.token_storage')->getToken()->getUser();
		
		$entry = $this->getEntry($id);
		$entry->setGroup($responsible->getGroup());
		$this->saveEntry($entry);
	
		return $this->redirectToRoute($this->getShowRoute());
	}
	
	public function removeAction(Request $request, $id)
	{
		$entry = $this->getEntry($id);
		$entry->setGroup(null);
		$this->saveEntry($entry);
	
		return $this->redirectToRoute($this->getShowRoute());
	}
	
// 	public function sendRequestAction(Request $request, $id)
// 	{
// 		$sender = $this->get('security.token_storage')->getToken()->getUser();
// 		$receiver = $this->getEntry($id);
		
// 		$entry = new \AppBundle\Entity\Request();
// 		$entry->setSender($sender);
// 		$entry->setReceiver($receiver);
// 		$this->saveEntry($entry);
	
// 		return $this->redirectToRoute($this->getShowRoute());
// 	}
	
	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SiteEntityController::createNewEntity()
	 */
	protected function createNewEntity(Request $request) {
		$user = new User();
	
		$groupRepository = $this->getDoctrine()->getRepository(Group::class);
	
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$groupId = $user->getGroup()->getId();
		$group = $groupRepository->find($groupId);
	
		$user->setGroup($group);
	
		return $user;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SimpleEntityController::getEntityType()
	 */
	protected function getEntityType()
	{
		return User::class;
	}

	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SiteEntityController::getFormType()
	 */
	protected function getFormType() {
		return UserType::class;
	}
	
	/**
	 * Create new filter (e.g <strong>new SimpleEntityFilter()</strong>)
	 *
	 * @return mixed
	 */
	protected function createNewFilter() {
		$groupRepository = $this->getDoctrine()->getRepository(Group::class);
		return new UserFilter($groupRepository);
	}
	
	protected function getPageCount() {
		return 3;
	}
}
