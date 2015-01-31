<?php

namespace Imaginativo\Bundle\TSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('descricao', null, array('label' => 'Descrição'))
            ->add('dtInicio', null, array('label' => 'Início'
                    , 'date_format' => 'dd-MM-yyyy'))
            ->add('dtFimPrevisto', null, array('label' => 'Término Previsto'
                    , 'date_format' => 'dd-MM-yyyy'))
            //->add('dtFim')
            //->add('status')
            ->add('template', 'choice', array(
                'choices' => array('SCRUM' => 'SCRUM', 'PMBOK' => 'PMBOK')))
            ->add('horasEstimadas', null, array('label' => 'Horas Estimadas'))
            ->add('cliente')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imaginativo\Bundle\TSBundle\Entity\Projeto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imaginativo_bundle_tsbundle_projeto';
    }
}
