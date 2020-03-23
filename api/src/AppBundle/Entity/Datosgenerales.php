<?php

namespace AppBundle\Entity;

/**
 * Datosgenerales
 */
class Datosgenerales
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $anclaje;

    /**
     * @var integer
     */
    private $capital;

    /**
     * @var string
     */
    private $caracteristicas;

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
    private $descripcion;

    /**
     * @var boolean
     */
    private $entregainmediata;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var integer
     */
    private $interes;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var string
     */
    private $tasa;

    /**
     * @var \DateTime
     */
    private $updatedat;

    /**
     * @var boolean
     */
    private $validado;

    /**
     * @var \AppBundle\Entity\Clientes
     */
    private $idcliente;


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
     * Set anclaje
     *
     * @param boolean $anclaje
     *
     * @return Datosgenerales
     */
    public function setAnclaje($anclaje)
    {
        $this->anclaje = $anclaje;

        return $this;
    }

    /**
     * Get anclaje
     *
     * @return boolean
     */
    public function getAnclaje()
    {
        return $this->anclaje;
    }

    /**
     * Set capital
     *
     * @param integer $capital
     *
     * @return Datosgenerales
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return integer
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set caracteristicas
     *
     * @param string $caracteristicas
     *
     * @return Datosgenerales
     */
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;

        return $this;
    }

    /**
     * Get caracteristicas
     *
     * @return string
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * Set cotitular
     *
     * @param string $cotitular
     *
     * @return Datosgenerales
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
     * @return Datosgenerales
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Datosgenerales
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set entregainmediata
     *
     * @param boolean $entregainmediata
     *
     * @return Datosgenerales
     */
    public function setEntregainmediata($entregainmediata)
    {
        $this->entregainmediata = $entregainmediata;

        return $this;
    }

    /**
     * Get entregainmediata
     *
     * @return boolean
     */
    public function getEntregainmediata()
    {
        return $this->entregainmediata;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Datosgenerales
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Datosgenerales
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set interes
     *
     * @param integer $interes
     *
     * @return Datosgenerales
     */
    public function setInteres($interes)
    {
        $this->interes = $interes;

        return $this;
    }

    /**
     * Get interes
     *
     * @return integer
     */
    public function getInteres()
    {
        return $this->interes;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Datosgenerales
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set tasa
     *
     * @param string $tasa
     *
     * @return Datosgenerales
     */
    public function setTasa($tasa)
    {
        $this->tasa = $tasa;

        return $this;
    }

    /**
     * Get tasa
     *
     * @return string
     */
    public function getTasa()
    {
        return $this->tasa;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     *
     * @return Datosgenerales
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
     * Set validado
     *
     * @param boolean $validado
     *
     * @return Datosgenerales
     */
    public function setValidado($validado)
    {
        $this->validado = $validado;

        return $this;
    }

    /**
     * Get validado
     *
     * @return boolean
     */
    public function getValidado()
    {
        return $this->validado;
    }

    /**
     * Set idcliente
     *
     * @param \AppBundle\Entity\Clientes $idcliente
     *
     * @return Datosgenerales
     */
    public function setIdcliente(\AppBundle\Entity\Clientes $idcliente = null)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \AppBundle\Entity\Clientes
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }
}

