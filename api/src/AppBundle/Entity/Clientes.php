<?php

namespace AppBundle\Entity;

/**
 * Clientes
 */
class Clientes
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
    private $claveidentificacion;

    /**
     * @var string
     */
    private $correo;

    /**
     * @var string
     */
    private $cotitular;

    /**
     * @var \DateTime
     */
    private $createdat;

    /**
     * @var string
     */
    private $domicilio;

    /**
     * @var boolean
     */
    private $eliminado;

    /**
     * @var \DateTime
     */
    private $fechacreacion;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $numerocliente;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var \DateTime
     */
    private $updatedat;

    /**
     * @var \AppBundle\Entity\Identificaciones
     */
    private $ididentificacion;

    /**
     * @var \AppBundle\Entity\Clasificaciones
     */
    private $idclasificacion;

    /**
     * @var \AppBundle\Entity\Usuarios
     */
    private $idcreadopor;


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
     * @return Clientes
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
     * Set claveidentificacion
     *
     * @param string $claveidentificacion
     *
     * @return Clientes
     */
    public function setClaveidentificacion($claveidentificacion)
    {
        $this->claveidentificacion = $claveidentificacion;

        return $this;
    }

    /**
     * Get claveidentificacion
     *
     * @return string
     */
    public function getClaveidentificacion()
    {
        return $this->claveidentificacion;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return Clientes
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set cotitular
     *
     * @param string $cotitular
     *
     * @return Clientes
     */
    public function setCotitular($cotitular)
    {
        $this->cotitular = $cotitular;

        return $this;
    }

    /**
     * Get cotitular
     *
     * @return string
     */
    public function getCotitular()
    {
        return $this->cotitular;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return Clientes
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
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Clientes
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set eliminado
     *
     * @param boolean $eliminado
     *
     * @return Clientes
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
     * Set fechacreacion
     *
     * @param \DateTime $fechacreacion
     *
     * @return Clientes
     */
    public function setFechacreacion($fechacreacion)
    {
        $this->fechacreacion = $fechacreacion;

        return $this;
    }

    /**
     * Get fechacreacion
     *
     * @return \DateTime
     */
    public function getFechacreacion()
    {
        return $this->fechacreacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Clientes
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
     * Set numerocliente
     *
     * @param string $numerocliente
     *
     * @return Clientes
     */
    public function setNumerocliente($numerocliente)
    {
        $this->numerocliente = $numerocliente;

        return $this;
    }

    /**
     * Get numerocliente
     *
     * @return string
     */
    public function getNumerocliente()
    {
        return $this->numerocliente;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Clientes
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Clientes
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     *
     * @return Clientes
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
     * Set ididentificacion
     *
     * @param \AppBundle\Entity\Identificaciones $ididentificacion
     *
     * @return Clientes
     */
    public function setIdidentificacion(\AppBundle\Entity\Identificaciones $ididentificacion = null)
    {
        $this->ididentificacion = $ididentificacion;

        return $this;
    }

    /**
     * Get ididentificacion
     *
     * @return \AppBundle\Entity\Identificaciones
     */
    public function getIdidentificacion()
    {
        return $this->ididentificacion;
    }

    /**
     * Set idclasificacion
     *
     * @param \AppBundle\Entity\Clasificaciones $idclasificacion
     *
     * @return Clientes
     */
    public function setIdclasificacion(\AppBundle\Entity\Clasificaciones $idclasificacion = null)
    {
        $this->idclasificacion = $idclasificacion;

        return $this;
    }

    /**
     * Get idclasificacion
     *
     * @return \AppBundle\Entity\Clasificaciones
     */
    public function getIdclasificacion()
    {
        return $this->idclasificacion;
    }

    /**
     * Set idcreadopor
     *
     * @param \AppBundle\Entity\Usuarios $idcreadopor
     *
     * @return Clientes
     */
    public function setIdcreadopor(\AppBundle\Entity\Usuarios $idcreadopor = null)
    {
        $this->idcreadopor = $idcreadopor;

        return $this;
    }

    /**
     * Get idcreadopor
     *
     * @return \AppBundle\Entity\Usuarios
     */
    public function getIdcreadopor()
    {
        return $this->idcreadopor;
    }
}

