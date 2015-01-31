<?php
namespace Imaginativo\Bundle\TSBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Imaginativo\Bundle\TSBundle\Entity\Conta;

class LoadContaData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $conta = new Conta();
        $conta->setNome('Conta Teste');
        $conta->setRazaoSocial('Conta Teste Ltda');
        $conta->setCNPJ('12345678912345');
        $conta->setNomeFantasia('Conta Teste');
        $conta->setDtCriacao(new \DateTime());
        $conta->setObs('Teste teste teste teste teste');

        $manager->persist($conta);
        $manager->flush();
    }
    
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }    
}