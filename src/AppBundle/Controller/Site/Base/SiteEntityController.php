<?php

namespace AppBundle\Controller\Site\Base;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Controller\Admin\Base\SimpleEntityController;
use AppBundle\Utils\ClassUtils;

abstract class SiteEntityController extends SimpleEntityController
{
	/**
	 * 
	 * @param Request $request
	 * @param unknown $page
	 */
	public function indexAction(Request $request, $page)
	{
		$filter = $this->createNewFilter();
		$filter->initValues($request);
		
		$filterForm = $this->createForm($this->getFilterFormType(), $filter);
		$filterForm->handleRequest($request);
			
		if ($filterForm->isSubmitted() && $filterForm->isValid()) {
			if ($filterForm->get('search')->isClicked()) {
				return $this->redirectToRoute($this->getIndexRoute(), $filter->getValues());
			}
			
			if ($filterForm->get('clear')->isClicked()) {
				$filter->clearQueryValues();
				return $this->redirectToRoute($this->getIndexRoute(), $filter->getValues());
			}
		}
		
		$allEntries = $this->getAllEntries($filter, $page);
		
		$params = $this->initTwigParams($request);
		
		$params['entries'] = $allEntries;
		$params['filter'] = $filterForm->createView();
		 
		return $this->render($this->getTwigList(), $params);
	}
	
	protected function initTwigParams(Request $request) {
		$params = array ();
		
		return $params;
	}
	
	//------------------------------------------------------------------------
	// Twig templates
	//------------------------------------------------------------------------
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::getTwigBase()
	 */
	protected function getTwigBase() {
		return 'site/';
	}
	
	//------------------------------------------------------------------------
	// Routing
	//------------------------------------------------------------------------
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::getIndexRoute()
	 */
	protected function getIndexRoute() {
		return 'site_' . ClassUtils::getClassName($this->getEntityType());
	}
}