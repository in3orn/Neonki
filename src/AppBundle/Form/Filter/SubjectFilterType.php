<?php

namespace AppBundle\Form\Filter;

use AppBundle\Entity\Filter\SubjectFilter;
use AppBundle\Entity\Stage;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Form\Filter\Base\SimpleEntityFilterType;

class SubjectFilterType extends SimpleEntityFilterType
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\FormType::addMoreFields()
	 */
	protected function addMoreFields(FormBuilderInterface $builder, array $options) {
		$builder
			->add('stages', EntityType::class, array(
					'class'			=> Stage::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'expanded'      => false,
					'multiple'      => true,
					'placeholder'	=> 'Choose stage'
			));
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Entity\Filter\Base\SimpleEntityFilterType::getEntityType()
	 */
	protected function getEntityType() {
		return SubjectFilter::class;
	}
}