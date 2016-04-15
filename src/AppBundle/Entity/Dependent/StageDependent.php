<?php

namespace AppBundle\Entity\Dependent;

use AppBundle\Entity\Stage;

interface StageDependent {
	
	/**
	 * @return Stage
	 */
	public function getStage();
}