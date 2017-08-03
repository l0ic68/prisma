<?php

namespace Main\MainBundle\Form;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;



class Devis1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //ici nous allons faire notre formulaire en PHP
        $builder
            ->add('type', 'choice', array('choices'=> array('Vitrine'=>'Vitrine',
                                                            'Dynamique'=>'Dynamique',
                                                            'E-commerce'=>'E-commerce'),
            'expanded'=>'true'))


            ->add('submit', 'submit', array('label' => 'Envoyer',
                                          'attr' => array('class' => 'btn btn-danger raised',
                                          'placeholder' => 'Envoyer',)));

    }

    public function getName()
    {
        return 'main_mainbundle_contact';
    }
}