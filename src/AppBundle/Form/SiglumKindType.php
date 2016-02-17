<?php

namespace AppBundle\Form;

use AppBundle\Entity\SiglumKind;
use AppBundle\Form\Base\SimpleEntityType;

class SiglumKindType extends SimpleEntityType
{
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\SimpleEntityType::getEntityType()
	 */
	protected function getEntityType() {
		return SiglumKind::class;
	}
}