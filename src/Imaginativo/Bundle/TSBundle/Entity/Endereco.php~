<?php

namespace Imaginativo\Bundle\TSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Endereco
 */
class Endereco
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $logradouro;

    /**
     * @var string
     */
    private $bairro;

    /**
     * @var string
     */
    private $cidade;

    /**
     * @var string
     */
    private $uF;

    /**
     * @var string
     */
    private $cEP;


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
     * Set logradouro
     *
     * @param string $logradouro
     * @return Endereco
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get logradouro
     *
     * @return string 
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     * @return Endereco
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return string 
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return Endereco
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set uF
     *
     * @param string $uF
     * @return Endereco
     */
    public function setUF($uF)
    {
        $this->uF = $uF;

        return $this;
    }

    /**
     * Get uF
     *
     * @return string 
     */
    public function getUF()
    {
        return $this->uF;
    }

    /**
     * Set cEP
     *
     * @param string $cEP
     * @return Endereco
     */
    public function setCEP($cEP)
    {
        $this->cEP = $cEP;

        return $this;
    }

    /**
     * Get cEP
     *
     * @return string 
     */
    public function getCEP()
    {
        return $this->cEP;
    }

    public function __toString(){
 
        return $this->logradouro;
 
    }
}
