<?php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
        $builder->add('email', 'email', array(
            'attr' => array('oninvalid' => "setCustomValidity('Would you please enter a valid email?')")
        ));
        $builder->add('subject');
        $builder->add('body', 'textarea');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blogger\BlogBundle\Entity\Enquiry'
        ));
    }

    public function getName()
    {
        // No matter what but every form should return a unique name.
        return 'contact';
    }
}
