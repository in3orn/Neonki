<?php

namespace AppBundle\Form;

use AppBundle\Entity\Article;
use AppBundle\Entity\Group;
use AppBundle\Form\Base\SimpleEntityType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use AppBundle\Form\Base\ImageEntityType;

class ArticleType extends ImageEntityType
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
			
			->add('group', EntityType::class, array(
					'class'			=> Group::class,
					'choice_label' 	=> 'name',
					'expanded'      => false,
					'multiple'      => false,
					'placeholder'	=> 'Choose group'
			))
			;
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see \AppBundle\Form\Base\SimpleEntityType::getEntityType()
	 */
	protected function getEntityType() {
		return Article::class;
	}
}