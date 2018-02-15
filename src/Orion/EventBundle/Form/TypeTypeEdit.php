<?php

namespace Orion\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeTypeEdit extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('libelle','text', array(
                'attr' => array('size' => '50'),
                ))
                ->add('description', 'textarea', array(
                'attr' => array('cols' => '50', 'rows' => '5'),
                ))               

                ->add('etat', 'choice', array(
                    'choices' => array('1' => 'Active',
                        '0' => 'Passive'),
                    'choice_translation_domain' => 'messages',
                    'expanded' => true,
                    'multiple' => false
                ))
                ->add('dateCreation', 'datetime', array (
                    'label' => 'Date de Creation',
                    'date_widget' => 'single_text',
                    'time_widget' => 'single_text'
                ))
                ->add('dateModification', 'datetime', array(
                    'label' => 'Date de Modification',
                    'data' => new \DateTime("now"),
                    'date_widget' => 'single_text',
                    'time_widget' => 'single_text'
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Orion\EventBundle\Entity\Type'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'orion_eventbundle_type';
    }

}
