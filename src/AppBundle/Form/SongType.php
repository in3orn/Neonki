<?php

namespace AppBundle\Form;

use AppBundle\Entity\Song;
use AppBundle\Form\Base\SimpleEntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Stage;

class SongType extends SimpleEntityType
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\FormType::addMoreFields()
	 */
	protected function addMoreFields(FormBuilderInterface $builder, array $options) {
		$builder
			->add('site', IntegerType::class)
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
		return Song::class;
	}
}