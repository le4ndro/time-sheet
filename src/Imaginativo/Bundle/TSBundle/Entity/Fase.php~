<?php

namespace Imaginativo\Bundle\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fase
 */
class Fase
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descricao;

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
     * @var string
     */
    private $obs;

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
     * Set descricao
     *
     * @param string $descricao
     * @return Fase
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
     * Set dtInicio
     *
     * @param \DateTime $dtInicio
     * @return Fase
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
     * @return Fase
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
     * @return Fase
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
     * Set obs
     *
     * @param string $obs
     * @return Fase
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
     * Set projeto
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Projeto $projeto
     * @return Fase
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
 
        return $this->descricao;
 
    }
}
