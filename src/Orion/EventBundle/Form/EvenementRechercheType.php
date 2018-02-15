<?php

namespace Orion\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementRechercheType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('etat', 'choice', array(
                    'choices' => array('2' => 'Public', '0' => 'Cancelled', '1' => 'Registred'),
                    'choice_translation_domain' => 'messages',
                    'expanded' => true,
                    'multiple' => false,
                    'data' => '1'
            ))
            ->add('dateCreation', null, array(
               'label' => 'Date de Création',
                'date_widget' => 'single_text',
                'time_widget' => 'single_text'
            ))
            ->add('horaireDebut', null, array(
               'label' => 'Horaire de Debut',
                'date_widget' => 'single_text',
                'time_widget' => 'single_text'
            ))
            ->add('HoraireFin', null, array(
               'label' => 'Horaire de Fin',
                'date_widget' => 'single_text',
                'time_widget' => 'single_text'
            ))
            ->add('fuseauHoraire', null, array(
               'label' => 'Fuseau Horaire'               
            ))
            ->add('adresse', 'entity', array(
                'class' => 'OrionEventBundle:Adresse',                
                'property' => 'Adresse',
                'label' => 'Adresse'                
                ))                
            ->add('Organisateur', 'entity', array(
                'class' => 'OrionEventBundle:Utilisateur',
                'property' => 'Utilisateur',
                'label' => 'Organisateur'
                ))
            ->add('theme', 'entity', array(
                'class' => 'OrionEventBundle:Theme',
                'property' => 'libelle',
                'label' => 'Theme'
                ))
            ->add('type', 'entity', array(
                'class' => 'OrionEventBundle:Type',
                'property' => 'libelle',
                'label' => 'Type'
                ))
            ->add('file', 'file')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Orion\EventBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'orion_eventbundle_evenement';
    }
}
