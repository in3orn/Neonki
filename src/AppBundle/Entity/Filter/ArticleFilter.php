<?php

namespace AppBundle\Entity\Filter;

use AppBundle\Entity\Filter\Base\GroupEntityFilter;
use AppBundle\Entity\Filter\Base\SimpleEntityFilter;

class ArticleFilter extends GroupEntityFilter {
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Entity\Filter\Base\SimpleEntityFilter::getOrderByExpression()
	 */
	public function getOrderByExpression() {
		return ' ORDER BY e.date DESC ';
	}
}