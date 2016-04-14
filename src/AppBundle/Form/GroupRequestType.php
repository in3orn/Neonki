<?php

namespace AppBundle\Form;

use AppBundle\Entity\GroupRequest;
use AppBundle\Entity\User;
use AppBundle\Form\Base\SimpleEntityType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;

class GroupRequestType extends SimpleEntityType
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\SimpleEntityType::addMainFields()
	 */
	protected function addMainFields(FormBuilderInterface $builder, array $options) {
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\FormType::addMoreFields()
	 */
	protected function addMoreFields(FormBuilderInterface $builder, array $options) {
		$builder
			->add('sender', EntityType::class, array(
					'class'			=> User::class,
					'choice_label' 	=> 'username',
					'placeholder'	=> 'Choose sender'
			))
			->add('receiver', EntityType::class, array(
					'class'			=> User::class,
					'choice_label' 	=> 'username',
					'placeholder'	=> 'Choose receiver'
			))
			;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\SimpleEntityType::getEntityType()
	 */
	protected function getEntityType() {
		return GroupRequest::class;
	}
}