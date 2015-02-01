<?php

namespace Imaginativo\Bundle\TSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MembroEquipeType extends AbstractType
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
            ->add('cargaHorariaDia', null, array('label' => 'Carga Horária Diária'))
            ->add('obs')
            ->add('valorHora', null, array('label' => 'Valor Hora'))
            //->add('status')
            //->add('equipe')
            ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imaginativo\Bundle\TSBundle\Entity\Membro'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imaginativo_bundle_tsbundle_membro';
    }
}
