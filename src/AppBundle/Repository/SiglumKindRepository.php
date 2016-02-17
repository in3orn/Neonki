<?php

namespace AppBundle\Repository;

use AppBundle\Entity\SiglumKind;
use AppBundle\Repository\Base\BaseEntityRepository;

class SiglumKindRepository extends BaseEntityRepository
{
    /**
     * 
     * {@inheritDoc}
     * @see \AppBundle\Repository\Base\BaseEntityRepository::getEntityType()
     */
	protected function getEntityType() {
		return SiglumKind::class;
	}
}