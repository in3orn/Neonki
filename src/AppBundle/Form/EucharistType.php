<?php

namespace AppBundle\Form;

use AppBundle\Entity\Eucharist;
use AppBundle\Entity\Group;
use AppBundle\Entity\Song;
use AppBundle\Entity\User;
use AppBundle\Form\Base\SimpleEntityType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class EucharistType extends SimpleEntityType
{
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\FormType::addMoreFields()
	 */
	protected function addMoreFields(FormBuilderInterface $builder, array $options) {
		$builder
			->add('date', DateTimeType::class, array(
			    'widget' => 'single_text',
			    'format' => 'dd/MM/yyyy HH:mm',
			    'attr' => [
			        'class' => 'form-control input-inline datetimepicker',
			        'data-provide' => 'datetimepicker',
			        'data-date-format' => 'DD/MM/YYYY HH:mm'
			    ]
			))
			->add('info', TextType::class, array(
					'required'		=> false
			))
			
			->add('siglum1st', TextType::class, array(
					'required'		=> false
			))
			->add('siglumRes', TextType::class, array(
					'required'		=> false
			))
			->add('siglum2nd', TextType::class, array (
					'required'		=> false
			))
			->add('siglumAkl', TextType::class, array(
					'required'		=> false
			))
			->add('siglumGos', TextType::class, array(
					'required'		=> false
			))
			
			->add('group', EntityType::class, array(
					'class'			=> Group::class,
					'choice_label' 	=> 'name',
					'placeholder'	=> 'Choose group'
			))
			
			//intros
			->add('introIntBy', EntityType::class, array(
					'class'			=> User::class,
					'choice_label' 	=> 'username',
					'required'		=> false,
					'placeholder'	=> 'Choose user'
			))
			->add('intro1stBy', EntityType::class, array(
					'class'			=> User::class,
					'choice_label' 	=> 'username',
					'required'		=> false,
					'placeholder'	=> 'Choose user'
			))
			->add('intro2ndBy', EntityType::class, array(
					'class'			=> User::class,
					'choice_label' 	=> 'username',
					'required'		=> false,
					'placeholder'	=> 'Choose user'
			))
			->add('introGosBy', EntityType::class, array(
					'class'			=> User::class,
					'choice_label' 	=> 'username',
					'required'		=> false,
					'placeholder'	=> 'Choose user'
			))
			
			//other
			->add('breadBy', EntityType::class, array(
					'class'			=> User::class,
					'choice_label' 	=> 'username',
					'required'		=> false,
					'placeholder'	=> 'Choose user'
			))
			->add('prayerBy', EntityType::class, array(
					'class'			=> User::class,
					'choice_label' 	=> 'username',
					'required'		=> false,
					'placeholder'	=> 'Choose user'
			))
			->add('flowersBy', EntityType::class, array(
					'class'			=> User::class,
					'choice_label' 	=> 'username',
					'required'		=> false,
					'placeholder'	=> 'Choose user'
			))
			
			//songs
			->add('songInt', EntityType::class, array(
					'class'			=> Song::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'placeholder'	=> 'Choose song'
			))
			->add('songPce', EntityType::class, array(
					'class'			=> Song::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'placeholder'	=> 'Choose song'
			))
			->add('songBr1', EntityType::class, array(
					'class'			=> Song::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'placeholder'	=> 'Choose song'
			))
			->add('songBr2', EntityType::class, array(
					'class'			=> Song::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'placeholder'	=> 'Choose song'
			))
			->add('songBr3', EntityType::class, array(
					'class'			=> Song::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'placeholder'	=> 'Choose song'
			))
			->add('songWn1', EntityType::class, array(
					'class'			=> Song::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'placeholder'	=> 'Choose song'
			))
			->add('songWn2', EntityType::class, array(
					'class'			=> Song::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'placeholder'	=> 'Choose song'
			))
			->add('songWn3', EntityType::class, array(
					'class'			=> Song::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'placeholder'	=> 'Choose song'
			))
			->add('songOut', EntityType::class, array(
					'class'			=> Song::class,
					'choice_label' 	=> 'name',
					'required'		=> false,
					'placeholder'	=> 'Choose song'
			))
			;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\SimpleEntityType::getEntityType()
	 */
	protected function getEntityType() {
		return Eucharist::class;
	}
}