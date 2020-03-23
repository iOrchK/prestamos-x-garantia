<?php

namespace AppBundle\Entity;

/**
 * Usuarios
 */
class Usuarios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var string
     */
    private $claveacceso;

    /**
     * @var \DateTime
     */
    private $createdat;

    /**
     * @var boolean
     */
    private $eliminado;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $token;

    /**
     * @var \DateTime
     */
    private $updatedat;

    /**
     * @var string
     */
    private $usuario;


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
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Usuarios
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set claveacceso
     *
     * @param string $claveacceso
     *
     * @return Usuarios
     */
    public function setClaveacceso($claveacceso)
    {
        $this->claveacceso = $claveacceso;

        return $this;
    }

    /**
     * Get claveacceso
     *
     * @return string
     */
    public function getClaveacceso()
    {
        return $this->claveacceso;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return Usuarios
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set eliminado
     *
     * @param boolean $eliminado
     *
     * @return Usuarios
     */
    public function setEliminado($eliminado)
    {
        $this->eliminado = $eliminado;

        return $this;
    }

    /**
     * Get eliminado
     *
     * @return boolean
     */
    public function getEliminado()
    {
        return $this->eliminado;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Usuarios
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuarios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Usuarios
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     *
     * @return Usuarios
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * Get updatedat
     *
     * @return \DateTime
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuarios
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}

