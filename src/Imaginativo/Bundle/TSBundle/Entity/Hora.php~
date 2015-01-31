<?php

namespace Imaginativo\Bundle\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hora
 */
class Hora
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dtRealizado;

    /**
     * @var integer
     */
    private $horas;

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
     * Set dtRealizado
     *
     * @param \DateTime $dtRealizado
     * @return Hora
     */
    public function setDtRealizado($dtRealizado)
    {
        $this->dtRealizado = $dtRealizado;

        return $this;
    }

    /**
     * Get dtRealizado
     *
     * @return \DateTime 
     */
    public function getDtRealizado()
    {
        return $this->dtRealizado;
    }

    /**
     * Set horas
     *
     * @param integer $horas
     * @return Hora
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return integer 
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /**
     * Set projeto
     *
     * @param \Imaginativo\Bundle\TSBundle\Entity\Projeto $projeto
     * @return Hora
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
}
