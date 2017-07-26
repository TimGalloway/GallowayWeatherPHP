<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultForm
 *
 * @author Tim
 */
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class DefaultForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	$weatherTypes = array(
            		'AccuWeather' => 'AccuWeather',
            		//'OpenWeather' => 'OpenWeather',
            	);

        $builder
            ->add('lstWeatherType', ChoiceType::class, array(
            	'choices' => $weatherTypes,
            	'label' => 'Weather Type',
            	'expanded' => true,
            	'multiple' => false,
            	 'choice_attr' => function($val, $key, $index) { return ['class' => 'lstWeatherType'];},
            	 'data' => 'AccuWeather',
            ))
            ->add('criteria')
            ->add('results', ChoiceType::class, array(
            	'choices' => array(
            		'Perth' => '26797',
            	)
            ))
            ->add('tempunit', ChoiceType::class, array(
            	'choices' => array(
            		'Metric' => 'Metric',
            		'Imperial' => 'Imperial',
            	)
            ))
            ->add('save', ButtonType::class, array(
    			'attr' => array(
    				'class' => 'save'
    			)
    		))
        ;
    }
}