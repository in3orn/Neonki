<?php

namespace AppBundle\Form;

use AppBundle\Entity\Siglum;
use AppBundle\Entity\Subject;
use AppBundle\Form\Base\SimpleEntityType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Entity\SiglumKind;

class SiglumType extends SimpleEntityType
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\FormType::addMoreFields()
	 */
	protected function addMoreFields(FormBuilderInterface $builder, array $options) {
		$builder
			->add('subject', EntityType::class, array(
					'class'			=> Subject::class,
					'choice_label' 	=> 'name',
					'placeholder'	=> 'Choose subject'
			))
			->add('kind', EntityType::class, array(
					'class'			=> SiglumKind::class,
					'choice_label' 	=> 'name',
					'placeholder'	=> 'Choose type'
			))
			;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\SimpleEntityType::getEntityType()
	 */
	protected function getEntityType() {
		return Siglum::class;
	}
}