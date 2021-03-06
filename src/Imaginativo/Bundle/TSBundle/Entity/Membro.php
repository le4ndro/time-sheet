<?php

namespace Imaginativo\Bundle\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membro
 */
class Membro
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
    private $cargo;

    /**
     * @var string
     */
    private $funcao;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $cargaHorariaDia;

    /**
     * @var string
     */
    private $obs;

    /**
     * @var string
     */
    private $valorHora;

    private $equipe;

    private $status;


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
     * @return Membro
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
     * Set cargo
     *
     * @param string $cargo
     * @return Membro
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set funcao
     *
     * @param string $funcao
     * @return Membro
     */
    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;

        return $this;
    }

    /**
     * Get funcao
     *
     * @return string 
     */
    public function getFuncao()
    {
        return $this->funcao;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Membro
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cargaHorariaDia
     *
     * @param integer $cargaHorariaDia
     * @return Membro
     */
    public function setCargaHorariaDia($cargaHorariaDia)
    {
        $this->cargaHorariaDia = $cargaHorariaDia;

        return $this;
    }

    /**
     * Get cargaHorariaDia
     *
     * @return integer 
     */
    public function getCargaHorariaDia()
    {
        return $this->cargaHorariaDia;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return Membro
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
     * Set valorHora
     *
     * @param string $valorHora
     * @return Membro
     */
    public function setValorHora($valorHora)
    {
        $this->valorHora = $valorHora;

        return $this;
    }

    /**
     * Get valorHora
     *
     * @return string 
     */
    public function getValorHora()
    {
        return $this->valorHora;
    }

    /**
     * Set equipe
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Equipe $equipe
     * @return Membro
     */
    public function setEquipe(\Imaginativo\Bundle\TSBundle\Entity\Equipe $equipe = null)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe
     *
     * @return \Imaginativo\Bundle\TSBundle\Entity\Equipe 
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Membro
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
