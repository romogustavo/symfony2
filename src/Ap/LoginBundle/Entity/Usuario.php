<?php

namespace Ap\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 */
class Usuario {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var integer
     */
    private $sexo;

    /**
     * @var integer
     */
    private $tipoDocumento;

    /**
     * @var integer
     */
    private $numeroDocumento;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido) {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido() {
        return $this->apellido;
    }

    /**
     * Set sexo
     *
     * @param integer $sexo
     * @return Usuario
     */
    public function setSexo($sexo) {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return integer 
     */
    public function getSexo() {
        return $this->sexo;
    }

    /**
     * Set tipoDocumento
     *
     * @param integer $tipoDocumento
     * @return Usuario
     */
    public function setTipoDocumento($tipoDocumento) {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return integer 
     */
    public function getTipoDocumento() {
        return $this->tipoDocumento;
    }

    /**
     * Set numeroDocumento
     *
     * @param integer $numeroDocumento
     * @return Usuario
     */
    public function setNumeroDocumento($numeroDocumento) {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return integer 
     */
    public function getNumeroDocumento() {
        return $this->numeroDocumento;
    }
    /**
     * __toSting()
     *
     * @return string 
     */
    public function __toString() {
        return $this->apellido.', '.$this->nombre;
    }
}
