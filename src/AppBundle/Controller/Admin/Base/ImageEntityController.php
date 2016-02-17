<?php

namespace AppBundle\Controller\Admin\Base;

use AppBundle\Controller\Admin\Base\SimpleEntityController;
use AppBundle\Form\Lists\Base\ImageEntityListType;
use Stof\DoctrineExtensionsBundle\Uploadable\UploadedFileInfo;

abstract class ImageEntityController extends SimpleEntityController {
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::prepareEntry()
	 */
	protected function prepareEntry($entry) {
		if($entry->getImage()) {
			$uploadableManager = $this->get('stof_doctrine_extensions.uploadable.manager');
			$uploadableManager->markEntityToUpload($entry, new UploadedFileInfo($entry->getImage()));
		}
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Controller\Admin\Base\SimpleEntityController::getListFormType()
	 */
	protected function getListFormType() {
		return ImageEntityListType::class;
	}
}