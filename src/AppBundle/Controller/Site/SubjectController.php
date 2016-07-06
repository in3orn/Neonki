<?php

namespace AppBundle\Controller\Site;

use AppBundle\Controller\Site\Base\SiteEntityController;
use AppBundle\Entity\Filter\SiglumFilter;
use AppBundle\Entity\Filter\SiglumRenderer;
use AppBundle\Entity\Filter\SubjectFilter;
use AppBundle\Entity\Siglum;
use AppBundle\Entity\SiglumKind;
use AppBundle\Entity\Stage;
use AppBundle\Entity\Subject;
use AppBundle\Form\Filter\SiglumRendererType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Filter\SubjectFilterType;

class SubjectController extends SiteEntityController
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SiteEntityController::showAction()
	 */
	public function showAction(Request $request, $id)
	{
		$entry = $this->getEntry($id);
		
		$filter = $this->createDetailFilter($entry);
		$filter->initValues($request);
		
		$repository = $this->getDoctrine()->getRepository(SiglumKind::class);
		
		$historicalKind = $repository->find(1);
		$filter->setKinds(array($historicalKind));
		$historical = $this->getDetails($filter);
		
		$propheticKind = $repository->find(2);
		$filter->setKinds(array($propheticKind));
		$prophetic = $this->getDetails($filter);
		
		$gospelsKind = $repository->find(3);
		$filter->setKinds(array($gospelsKind));
		$gospels = $this->getDetails($filter);
		
		$otherKind = $repository->find(4);
		$filter->setKinds(array($otherKind));
		$other = $this->getDetails($filter);
		
		$renderer = $this->createRenderer();
		$renderer->initValues($request);
		
		$rendererForm = $this->createForm($this->getRendererFormType(), $renderer);
		$rendererForm->handleRequest($request);
		
		$this->denyAccessUnlessGranted('show', $entry);
		
		if ($rendererForm->isSubmitted() && $rendererForm->isValid()) {
			if ($rendererForm->get('search')->isClicked()) {
				$params = $renderer->getValues();
				$params['id'] = $id; 
				return $this->redirectToRoute($this->getShowRoute(), $params);
			}
				
			if ($rendererForm->get('clear')->isClicked()) {
				$renderer->clearQueryValues();
				$params = $renderer->getValues();
				$params['id'] = $id;
				return $this->redirectToRoute($this->getShowRoute(), $params);
			}
		}
		
		return $this->render($this->getTwigShow(), array(
				'entry' => $entry, 
				'historical' => $historical,
				'prophetic' => $prophetic,
				'gospels' => $gospels,
				'other' => $other,
				'rendererForm' => $rendererForm->createView(),
				'renderer' => $renderer
		));
	}
	
	protected function createNewFilter() {
		$repository = $this->getDoctrine()->getRepository(Stage::class);
		$filter = new SubjectFilter($repository);
		
		return $filter;
	}
	
	protected function createDetailFilter($header) {
		$repository = $this->getDoctrine()->getRepository(Subject::class); 
		
		$filter = new SiglumFilter($repository);
		$filter->setSubjects(array($header));
		
		return $filter;
	}
	
	protected function createRenderer() {
		return new SiglumRenderer();
	}
	
	/**
	 * 
	 * @param unknown $filter
	 */
	protected function getDetails($filter) {
		$repository = $this->getDetailRepository();
		return $repository->findSelected($filter);
	}
	
	protected function getDetailRepository() {
		return $this->getDoctrine()->getRepository($this->getDetailEntityType());
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Site\Base\SiteEntityController::getEntityType()
	 */
	protected function getEntityType()
	{
		return Subject::class;
	}
	
	protected function getDetailEntityType()
	{
		return Siglum::class;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::getFormType()
	 */
	protected function getFilterFormType() {
		return SubjectFilterType::class;
	}
	
	protected function getRendererFormType()
	{
		return SiglumRendererType::class;
	}
	
	protected function getShowRoute()
	{
		return $this->getIndexRoute() . '_show';
	}
}
