<?php

namespace Imaginativo\Bundle\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Atividade
 */
class Atividade
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
    private $status;

    /**
     * @var string
     */
    private $obs;

    /**
     * @var \DateTime
     */
    private $dtInicio;

    /**
     * @var \DateTime
     */
    private $dtFimPrevisto;

    /**
     * @var \DateTime
     */
    private $dtFim;

    /**
     * @var integer
     */
    private $horasEstimadas;

    private $projeto;

    private $notas;

    public function __construct()
    {
        $this->notas = new ArrayCollection();
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
     * @return Atividade
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
     * @return Atividade
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
     * Set status
     *
     * @param string $status
     * @return Atividade
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Atividade
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
     * Set dtInicio
     *
     * @param \DateTime $dtInicio
     * @return Atividade
     */
    public function setDtInicio($dtInicio)
    {
        $this->dtInicio = $dtInicio;

        return $this;
    }

    /**
     * Get dtInicio
     *
     * @return \DateTime 
     */
    public function getDtInicio()
    {
        return $this->dtInicio;
    }

    /**
     * Set dtFimPrevisto
     *
     * @param \DateTime $dtFimPrevisto
     * @return Atividade
     */
    public function setDtFimPrevisto($dtFimPrevisto)
    {
        $this->dtFimPrevisto = $dtFimPrevisto;

        return $this;
    }

    /**
     * Get dtFimPrevisto
     *
     * @return \DateTime 
     */
    public function getDtFimPrevisto()
    {
        return $this->dtFimPrevisto;
    }

    /**
     * Set dtFim
     *
     * @param \DateTime $dtFim
     * @return Atividade
     */
    public function setDtFim($dtFim)
    {
        $this->dtFim = $dtFim;

        return $this;
    }

    /**
     * Get dtFim
     *
     * @return \DateTime 
     */
    public function getDtFim()
    {
        return $this->dtFim;
    }

    /**
     * Set horasEstimadas
     *
     * @param integer $horasEstimadas
     * @return Atividade
     */
    public function setHorasEstimadas($horasEstimadas)
    {
        $this->horasEstimadas = $horasEstimadas;

        return $this;
    }

    /**
     * Get horasEstimadas
     *
     * @return integer 
     */
    public function getHorasEstimadas()
    {
        return $this->horasEstimadas;
    }

    /**
     * Add notas
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Nota $notas
     * @return Atividade
     */
    public function addNota(\Imaginativo\Bundle\TSBundle\Entity\Nota $notas)
    {
        $this->notas[] = $notas;

        return $this;
    }

    /**
     * Remove notas
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Nota $notas
     */
    public function removeNota(\Imaginativo\Bundle\TSBundle\Entity\Nota $notas)
    {
        $this->notas->removeElement($notas);
    }

    /**
     * Get notas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set projeto
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Projeto $projeto
     * @return Atividade
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
