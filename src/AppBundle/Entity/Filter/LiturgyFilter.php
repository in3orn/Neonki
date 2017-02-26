<?php

namespace AppBundle\Entity\Filter;

use AppBundle\Entity\Filter\Base\GroupEntityFilter;

class LiturgyFilter extends GroupEntityFilter {
	
	public function getOrderByExpression() {
		return ' ORDER BY e.date DESC ';
	}
}