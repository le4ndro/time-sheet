<?php

namespace Imaginativo\Bundle\TSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DespesaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('tipo')
            ->add('dtDispesa')
            ->add('reembolsavel')
            ->add('faturado')
            ->add('aprovado')
            ->add('creditado')
            ->add('projeto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imaginativo\Bundle\TSBundle\Entity\Despesa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imaginativo_bundle_tsbundle_despesa';
    }
}
