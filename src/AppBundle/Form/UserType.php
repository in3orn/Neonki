<?php

namespace AppBundle\Form;

use AppBundle\Entity\Group;
use AppBundle\Entity\User;
use AppBundle\Form\Base\SimpleEntityType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends SimpleEntityType
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\SimpleEntityType::addMainFields()
	 */
	protected function addMainFields(FormBuilderInterface $builder, array $options) {
		$builder
		->add('username', TextType::class, array(
				'attr' => array('autofocus' => true)
		));
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\FormType::addMoreFields()
	 */
	protected function addMoreFields(FormBuilderInterface $builder, array $options) {
		$roles = array(
				'User' => 'ROLE_USER', 
				'Responsible' => 'ROLE_RESPONSIBLE',
				'Admin' => 'ROLE_ADMIN',
				'Super admin' => 'ROLE_SUPER_ADMIN'
		);
		
		$builder
			->add('group', EntityType::class, array(
					'class'			=> Group::class,
					'choice_label' 	=> 'name',
					'placeholder'	=> 'Choose group'
			))
			->add('roles', ChoiceType::class, array(
					'choices'		=> $roles,
					'placeholder'	=> 'Select roles',
					'multiple'		=> true,
					'expanded'		=> true
			))
			;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\SimpleEntityType::getEntityType()
	 */
	protected function getEntityType() {
		return User::class;
	}
}