<?php

namespace AppBundle\Form\Filter;

use AppBundle\Entity\Filter\UserFilter;
use AppBundle\Entity\Group;
use AppBundle\Form\Filter\Base\SimpleEntityFilterType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;

class UserFilterType extends SimpleEntityFilterType
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\FormType::addMoreFields()
	 */
	protected function addMainFields(FormBuilderInterface $builder, array $options) {
		$builder
			->add('groups', EntityType::class, array(
					'class'			=> Group::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'expanded'      => false,
					'multiple'      => true,
					'placeholder'	=> 'Choose group'
			));
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Entity\Filter\Base\SimpleEntityFilterType::getEntityType()
	 */
	protected function getEntityType() {
		return UserFilter::class;
	}
}