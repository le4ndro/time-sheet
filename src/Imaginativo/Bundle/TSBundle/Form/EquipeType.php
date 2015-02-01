<?php

namespace Imaginativo\Bundle\TSBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class EquipeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('descricao', null, array('label' => 'Descrição' ))
            ->add('obs')
            //->add('dtCriacao')
            //->add('status')
            ->add('conta')
            //->add('responsavel')
         ;  
        
        $builder            
            ->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event){
                $form = $event->getForm();
                $data = $event->getData();
                $membros = $data->getMembros();
                
                if ($data->getID() !== null && count($membros) > 0) {
                    $form->add('responsavel', 'entity', array(
                        'class' => 'ImaginativoTSBundle:Membro',
                        'query_builder' => function(EntityRepository $er) use ($data){
                            return $er->createQueryBuilder('m')
                                ->where('m.equipe = ' . $data->getID())
                                ->orderBy('m.nome', 'ASC');
                        },
                    ));
                }
            });
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Imaginativo\Bundle\TSBundle\Entity\Equipe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imaginativo_bundle_tsbundle_equipe';
    }
}
