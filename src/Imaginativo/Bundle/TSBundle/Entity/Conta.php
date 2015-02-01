<?php

namespace Imaginativo\Bundle\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Conta
 */
class Conta
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

    private $equipes;

    private $clientes;

    private $endereco;

    private $status;

    
    public function __contruct()
    {
        $this->equipes = new ArrayCollection();
        $this->clientes = new ArrayCollection();
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
     * @return Conta
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
     * @return Conta
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
     * @return Conta
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
     * @return Conta
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
     * @return Conta
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
     * @return Conta
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
     * @return Conta
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
     * Add equipes
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Equipe $equipes
     * @return Conta
     */
    public function addEquipe(\Imaginativo\Bundle\TSBundle\Entity\Equipe $equipes)
    {
        $this->equipes[] = $equipes;

        return $this;
    }

    /**
     * Remove equipes
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Equipe $equipes
     */
    public function removeEquipe(\Imaginativo\Bundle\TSBundle\Entity\Equipe $equipes)
    {
        $this->equipes->removeElement($equipes);
    }

    /**
     * Get equipes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEquipes()
    {
        return $this->equipes;
    }

    /**
     * Add clientes
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Cliente $clientes
     * @return Conta
     */
    public function addCliente(\Imaginativo\Bundle\TSBundle\Entity\Cliente $clientes)
    {
        $this->clientes[] = $clientes;

        return $this;
    }

    /**
     * Remove clientes
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Cliente $clientes
     */
    public function removeCliente(\Imaginativo\Bundle\TSBundle\Entity\Cliente $clientes)
    {
        $this->clientes->removeElement($clientes);
    }

    /**
     * Get clientes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClientes()
    {
        return $this->clientes;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Conta
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->clientes = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
