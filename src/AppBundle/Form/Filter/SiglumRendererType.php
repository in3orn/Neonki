<?php

namespace AppBundle\Form\Filter;

use AppBundle\Entity\Filter\SiglumRenderer;
use AppBundle\Form\Base\BaseFormType;
use AppBundle\Form\Filter\Base\SimpleEntityFilterType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class SiglumRendererType extends BaseFormType
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\FormType::addMainFields()
	 */
	protected function addMainFields(FormBuilderInterface $builder, array $options) {
		
		$choices = array();
		for($i = 1; $i <= 10; $i++)
			$choices[$i] = $i;
		
		$builder
			->add('actUser', ChoiceType::class, array(
					'choices' 		=> $choices,
					'required'		=> false
			))
			->add('maxUser', ChoiceType::class, array(
					'choices' 		=> $choices,
					'required'		=> false
			))
			->add('colorUser', CheckboxType::class, array(
					'required'		=> false
			))
			->add('showUserOnly', CheckboxType::class, array(
					'required'		=> false
			))
			->add('showPsalms', CheckboxType::class, array(
					'required'		=> false
			))
			->add('showSongOfSongs', CheckboxType::class, array(
					'required'		=> false
			))
			;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Entity\Filter\Base\SimpleEntityFilterType::getEntityType()
	 */
	protected function getEntityType() {
		return SiglumRenderer::class;
	}
}