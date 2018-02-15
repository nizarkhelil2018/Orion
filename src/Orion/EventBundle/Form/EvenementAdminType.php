<?php

namespace Orion\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class EvenementAdminType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre','text', array(
                'attr' => array('size' => '50'),
                ))
                ->add('description','textarea', array(
                'attr' => array('cols' => '50', 'rows' => '5'),
                ))
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
                ->add('pays','country',array(
                    'choice_translation_domain' => 'messages',
                    'placeholder' => 'Choose a country'
                ))
                ->add('ville')
                ->add('codePostal')
                ->add('adresse')
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
                ->add('Organisateur', 'entity', array(
                    'class' => 'AppBundle:User',
                    'property' => 'username',
                    'label' => 'Organisateur'
                ))
                ->add('fuseauHoraire', null, array(
                    'label' => 'Fuseau Horaire'
                ))
                ->add('theme', 'entity', array(
                    'class' => 'OrionEventBundle:Theme',
                    'choice_translation_domain' => 'messages',
                    'placeholder' => 'Choose a theme',
                    'query_builder' => function(EntityRepository $er) {
                      return $er->createQueryBuilder('u')                                               
                        ->orderBy('u.libelle', 'ASC')  
                        ->where('u.etat = 1');
                        },
                     'label' => 'Theme',
                     'required'=>'True'
                ))
                    

                    

                ->add('type', 'entity', array(
                    'class' => 'OrionEventBundle:Type',
                    'choice_translation_domain' => 'messages',
                    'placeholder' => 'Choose a type',
                    'property' => 'libelle', 
                    'query_builder' => function(EntityRepository $er) {
                      return $er->createQueryBuilder('u')                                               
                        ->orderBy('u.libelle', 'ASC')  
                        ->where('u.etat = 1');
                        },
                    'label' => 'Type'
                ))
                 ->add('file','file')
                    
            
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Orion\EventBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'orion_eventbundle_evenement';
    }

}
