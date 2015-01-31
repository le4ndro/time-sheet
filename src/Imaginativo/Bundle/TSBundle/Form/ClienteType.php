<?php

namespace Imaginativo\Bundle\TSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('razaoSocial', null, array('label' => 'Razão Social'))
            ->add('cNPJ', null, array('label' => 'CNPJ'))
            ->add('nomeFantasia', null, array('label' => 'Nome Fantasia'))
            //->add('dtCriacao') Valor padrão atribuido no controle
            ->add('obs')
            //->add('status') Valor padrão atribuido no controle
            //->add('endereco')
            ->add('conta')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imaginativo\Bundle\TSBundle\Entity\Cliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imaginativo_bundle_tsbundle_cliente';
    }
}
