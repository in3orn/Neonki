<?php

namespace AppBundle\Form;

use AppBundle\Entity\Stage;
use AppBundle\Entity\Subject;
use AppBundle\Form\Base\SimpleEntityType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class SubjectType extends SimpleEntityType
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\FormType::addMoreFields()
	 */
	protected function addMoreFields(FormBuilderInterface $builder, array $options) {
		$builder
			->add('content', TextareaType::class)
			
			->add('stage', EntityType::class, array(
					'class'			=> Stage::class,
					'choice_label' 	=> 'name',
					'placeholder'	=> 'Choose stage'
			));
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\SimpleEntityType::getEntityType()
	 */
	protected function getEntityType() {
		return Subject::class;
	}
}