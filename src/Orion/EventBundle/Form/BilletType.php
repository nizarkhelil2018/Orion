<?php

namespace Orion\EventBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BilletType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('type', 'choice', array(
                    'choices' => array('1' => 'Payant',
                        '0' => 'Gratuit'),
                    'choice_translation_domain' => 'messages',
                    'expanded' => true,
                    'multiple' => false,                    
                    'data' => ''
                ))
            ->add('prix')
            ->add('nombre')
            ->add('attente')
            ->add('dateCreation', null, array(
               'label' => 'Date de Création',
                'date_widget' => 'single_text',
                'time_widget' => 'single_text'
            ))
            ->add('evenement')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Orion\EventBundle\Entity\Billet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'orion_eventbundle_billet';
    }
}
