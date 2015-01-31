<?php

namespace Imaginativo\Bundle\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Equipe
 */
class Equipe
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
    private $descricao;

    /**
     * @var string
     */
    private $obs;

    /**
     * @var \DateTime
     */
    private $dtCriacao;

    private $conta;

    private $membros;

    private $status;

    public function __construct()
    {
        $this->membros = new ArrayCollection();
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
     * @return Equipe
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
     * Set descricao
     *
     * @param string $descricao
     * @return Equipe
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Equipe
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
     * Set dtCriacao
     *
     * @param \DateTime $dtCriacao
     * @return Equipe
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
     * Add membros
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Membro $membros
     * @return Equipe
     */
    public function addMembro(\Imaginativo\Bundle\TSBundle\Entity\Membro $membros)
    {
        $this->membros[] = $membros;

        return $this;
    }

    /**
     * Remove membros
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Membro $membros
     */
    public function removeMembro(\Imaginativo\Bundle\TSBundle\Entity\Membro $membros)
    {
        $this->membros->removeElement($membros);
    }

    /**
     * Get membros
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * Set conta
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Conta $conta
     * @return Equipe
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
     * @return Equipe
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
