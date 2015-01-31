<?php

namespace Imaginativo\Bundle\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Despesa
 */
class Despesa
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
    private $tipo;

    /**
     * @var \DateTime
     */
    private $dtDispesa;

    /**
     * @var boolean
     */
    private $reembolsavel;

    /**
     * @var boolean
     */
    private $faturado;

    /**
     * @var boolean
     */
    private $aprovado;

    /**
     * @var boolean
     */
    private $creditado;

    private $projeto;

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
     * @return Despesa
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
     * Set tipo
     *
     * @param string $tipo
     * @return Despesa
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set dtDispesa
     *
     * @param \DateTime $dtDispesa
     * @return Despesa
     */
    public function setDtDispesa($dtDispesa)
    {
        $this->dtDispesa = $dtDispesa;

        return $this;
    }

    /**
     * Get dtDispesa
     *
     * @return \DateTime 
     */
    public function getDtDispesa()
    {
        return $this->dtDispesa;
    }

    /**
     * Set reembolsavel
     *
     * @param boolean $reembolsavel
     * @return Despesa
     */
    public function setReembolsavel($reembolsavel)
    {
        $this->reembolsavel = $reembolsavel;

        return $this;
    }

    /**
     * Get reembolsavel
     *
     * @return boolean 
     */
    public function getReembolsavel()
    {
        return $this->reembolsavel;
    }

    /**
     * Set faturado
     *
     * @param boolean $faturado
     * @return Despesa
     */
    public function setFaturado($faturado)
    {
        $this->faturado = $faturado;

        return $this;
    }

    /**
     * Get faturado
     *
     * @return boolean 
     */
    public function getFaturado()
    {
        return $this->faturado;
    }

    /**
     * Set aprovado
     *
     * @param boolean $aprovado
     * @return Despesa
     */
    public function setAprovado($aprovado)
    {
        $this->aprovado = $aprovado;

        return $this;
    }

    /**
     * Get aprovado
     *
     * @return boolean 
     */
    public function getAprovado()
    {
        return $this->aprovado;
    }

    /**
     * Set creditado
     *
     * @param boolean $creditado
     * @return Despesa
     */
    public function setCreditado($creditado)
    {
        $this->creditado = $creditado;

        return $this;
    }

    /**
     * Get creditado
     *
     * @return boolean 
     */
    public function getCreditado()
    {
        return $this->creditado;
    }

    /**
     * Set projeto
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Projeto $projeto
     * @return Despesa
     */
    public function setProjeto(\Imaginativo\Bundle\TSBundle\Entity\Projeto $projeto = null)
    {
        $this->projeto = $projeto;

        return $this;
    }

    /**
     * Get projeto
     *
     * @return \Imaginativo\Bundle\TSBundle\Entity\Projeto 
     */
    public function getProjeto()
    {
        return $this->projeto;
    }

    public function __toString(){
 
        return $this->nome;
 
    }
}
