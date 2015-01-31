<?php

namespace Imaginativo\Bundle\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nota
 */
class Nota
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $texto;

    /**
     * @var string
     */
    private $statusNota;

    /**
     * @var \DateTime
     */
    private $dtNota;

    private $atividade;


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
     * Set texto
     *
     * @param string $texto
     * @return Nota
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set statusNota
     *
     * @param string $statusNota
     * @return Nota
     */
    public function setStatusNota($statusNota)
    {
        $this->statusNota = $statusNota;

        return $this;
    }

    /**
     * Get statusNota
     *
     * @return string 
     */
    public function getStatusNota()
    {
        return $this->statusNota;
    }

    /**
     * Set dtNota
     *
     * @param \DateTime $dtNota
     * @return Nota
     */
    public function setDtNota($dtNota)
    {
        $this->dtNota = $dtNota;

        return $this;
    }

    /**
     * Get dtNota
     *
     * @return \DateTime 
     */
    public function getDtNota()
    {
        return $this->dtNota;
    }

    /**
     * Set atividade
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Atividade $atividade
     * @return Nota
     */
    public function setAtividade(\Imaginativo\Bundle\TSBundle\Entity\Atividade $atividade = null)
    {
        $this->atividade = $atividade;

        return $this;
    }

    /**
     * Get atividade
     *
     * @return \Imaginativo\Bundle\TSBundle\Entity\Atividade 
     */
    public function getAtividade()
    {
        return $this->atividade;
    }

    public function __toString(){
 
        return $this->nome;
 
    }
}
