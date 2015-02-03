<?php

namespace Imaginativo\Bundle\TSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AtividadeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('descricao')
            ->add('status')
            ->add('obs')
            ->add('dtInicio')
            ->add('dtFimPrevisto')
            ->add('dtFim')
            ->add('horasEstimadas')
            ->add('projeto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imaginativo\Bundle\TSBundle\Entity\Atividade'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imaginativo_bundle_tsbundle_atividade';
    }
}
