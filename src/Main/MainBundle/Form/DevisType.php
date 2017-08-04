<?php

namespace Main\MainBundle\Form;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;



class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //ici nous allons faire notre formulaire en PHP
        switch ($options['flow_step']) {
            case 1:
                $builder->add('type', 'choice', array('choices' => array('Vitrine' => 'Vitrine',
                    'Dynamique' => 'Dynamique',
                    'E-commerce' => 'E-commerce'),
                    'expanded' => 'true'))
                    ->add('submit', 'submit', array('label' => 'Envoyer',
                        'attr' => array('class' => 'btn btn-danger raised',
                            'placeholder' => 'Envoyer',)));
                break;
            case 2:
                $builder
                    ->add('modules', 'entity', array('class' => 'MainBundle:Modules',
                        'property' => 'nom',
                        'multiple' => 'true',
                        'expanded'=>'true'))

                    ->add('Send', 'submit', array('label' => 'Envoyer',
                        'attr' => array('class' => 'btn btn-danger raised',
                            'placeholder' => 'Envoyer',)));
                break;

        }
    }

    public function getName()
    {
        return 'main_mainbundle_contact';
    }
}