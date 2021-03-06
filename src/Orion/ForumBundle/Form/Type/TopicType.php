<?php

namespace Orion\ForumBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Orion\ForumBundle\Form\Type\Model\AbstractTopicType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class TopicType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextareaType::class,
                array(
                    'label'  => 'orion.forum.post',
                    'mapped' => false
                )
            )
        ;
    }
  
    public function getParent()
    {
        return AbstractTopicType::class;
    }
}
