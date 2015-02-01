<?php

namespace Imaginativo\Bundle\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cliente
 */
class Cliente
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $razaoSocial;

    /**
     * @var string
     */
    private $cNPJ;

    /**
     * @var string
     */
    private $nomeFantasia;

    /**
     * @var \DateTime
     */
    private $dtCriacao;

    /**
     * @var string
     */
    private $obs;

    private $conta;

    private $projetos;

    private $contatos;

    private $endereco;

    private $status;

    public function __construct()
    {
        $this->projetos = new ArrayCollection();
        $this->contatos = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set razaoSocial
     *
     * @param string $razaoSocial
     * @return Cliente
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string 
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set cNPJ
     *
     * @param string $cNPJ
     * @return Cliente
     */
    public function setCNPJ($cNPJ)
    {
        $this->cNPJ = $cNPJ;

        return $this;
    }

    /**
     * Get cNPJ
     *
     * @return string 
     */
    public function getCNPJ()
    {
        return $this->cNPJ;
    }

    /**
     * Set nomeFantasia
     *
     * @param string $nomeFantasia
     * @return Cliente
     */
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get nomeFantasia
     *
     * @return string 
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * Set dtCriacao
     *
     * @param \DateTime $dtCriacao
     * @return Cliente
     */
    public function setDtCriacao($dtCriacao)
    {
        $this->dtCriacao = $dtCriacao;

        return $this;
    }

    /**
     * Get dtCriacao
     *
     * @return \DateTime 
     */
    public function getDtCriacao()
    {
        return $this->dtCriacao;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Cliente
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs
     *
     * @return string 
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * Set endereco
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Endereco $endereco
     * @return Cliente
     */
    public function setEndereco(\Imaginativo\Bundle\TSBundle\Entity\Endereco $endereco = null)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return \Imaginativo\Bundle\TSBundle\Entity\Endereco 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Add projetos
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Projeto $projetos
     * @return Cliente
     */
    public function addProjeto(\Imaginativo\Bundle\TSBundle\Entity\Projeto $projetos)
    {
        $this->projetos[] = $projetos;

        return $this;
    }

    /**
     * Remove projetos
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Projeto $projetos
     */
    public function removeProjeto(\Imaginativo\Bundle\TSBundle\Entity\Projeto $projetos)
    {
        $this->projetos->removeElement($projetos);
    }

    /**
     * Get projetos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjetos()
    {
        return $this->projetos;
    }

    /**
     * Add contatos
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Contato $contatos
     * @return Cliente
     */
    public function addContato(\Imaginativo\Bundle\TSBundle\Entity\Contato $contatos)
    {
        $this->contatos[] = $contatos;

        return $this;
    }

    /**
     * Remove contatos
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Contato $contatos
     */
    public function removeContato(\Imaginativo\Bundle\TSBundle\Entity\Contato $contatos)
    {
        $this->contatos->removeElement($contatos);
    }

    /**
     * Get contatos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContatos()
    {
        return $this->contatos;
    }

    /**
     * Set conta
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Conta $conta
     * @return Cliente
     */
    public function setConta(\Imaginativo\Bundle\TSBundle\Entity\Conta $conta = null)
    {
        $this->conta = $conta;

        return $this;
    }

    /**
     * Get conta
     *
     * @return \Imaginativo\Bundle\TSBundle\Entity\Conta 
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Cliente
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function __toString(){
 
        return $this->nome;
 
    }
}
