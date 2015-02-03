<?php

namespace Imaginativo\Bundle\TSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContatoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('cargo')
            ->add('funcao', null, array('label' => 'Função'))
            ->add('email')
            ->add('telefone')
            ->add('celular')
            ->add('obs')
            //->add('status')
            //->add('cliente')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imaginativo\Bundle\TSBundle\Entity\Contato'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imaginativo_bundle_tsbundle_contato';
    }
}
