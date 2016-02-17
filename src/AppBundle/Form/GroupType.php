<?php

namespace AppBundle\Form;

use AppBundle\Entity\Group;
use AppBundle\Entity\Stage;
use AppBundle\Form\Base\ImageEntityType;
use AppBundle\Form\Base\SimpleEntityType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class GroupType extends ImageEntityType
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\FormType::addMoreFields()
	 */
	protected function addMoreFields(FormBuilderInterface $builder, array $options) {
		$builder
			->add('content', TextareaType::class, array(
					'required'		=> false
			))
			
			->add('parent', EntityType::class, array(
					'class'			=> Group::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'placeholder'	=> 'Choose parent group'
			))
			
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
		return Group::class;
	}
}