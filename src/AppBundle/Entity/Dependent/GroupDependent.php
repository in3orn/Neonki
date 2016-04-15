<?php

namespace AppBundle\Entity\Dependent;

use AppBundle\Entity\Group;

interface GroupDependent {
	
	/**
	 * @return Group
	 */
	public function getGroup();
}