<?php

namespace AppBundle\Controller\Site;

use AppBundle\Controller\Site\Base\SiteEntityController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Article;
use AppBundle\Entity\Filter\ArticleFilter;
use AppBundle\Repository\GroupRepository;
use AppBundle\Entity\Group;
use AppBundle\Form\ArticleType;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends SiteEntityController
{
	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SiteEntityController::createNewEntity()
	 */
	protected function createNewEntity(Request $request) {
		$article = new Article();
	
		$groupRepository = $this->getDoctrine()->getRepository(Group::class);
	
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$groupId = $user->getGroup()->getId();
		$group = $groupRepository->find($groupId);
	
		$article->setGroup($group);
	
		return $article;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SimpleEntityController::getEntityType()
	 */
	protected function getEntityType()
	{
		return Article::class;
	}

	/**
	 *
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SiteEntityController::getFormType()
	 */
	protected function getFormType() {
		return ArticleType::class;
	}
	
	/**
	 * Create new filter (e.g <strong>new SimpleEntityFilter()</strong>)
	 *
	 * @return mixed
	 */
	protected function createNewFilter() {
		$groupRepository = $this->getDoctrine()->getRepository(Group::class);
		return new ArticleFilter($groupRepository);
	}
	
	protected function getPageCount() {
		return 3;
	}
}
