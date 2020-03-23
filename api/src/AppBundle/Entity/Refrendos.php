<?php

namespace AppBundle\Entity;

/**
 * Refrendos
 */
class Refrendos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $abonocapital;

    /**
     * @var \DateTime
     */
    private $createdat;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $fechapagado;

    /**
     * @var \DateTime
     */
    private $fechavencimiento;

    /**
     * @var integer
     */
    private $interes;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var integer
     */
    private $recargo;

    /**
     * @var \DateTime
     */
    private $updatedat;

    /**
     * @var \AppBundle\Entity\Datosgenerales
     */
    private $iddatosgenerales;


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
     * Set abonocapital
     *
     * @param integer $abonocapital
     *
     * @return Refrendos
     */
    public function setAbonocapital($abonocapital)
    {
        $this->abonocapital = $abonocapital;

        return $this;
    }

    /**
     * Get abonocapital
     *
     * @return integer
     */
    public function getAbonocapital()
    {
        return $this->abonocapital;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return Refrendos
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
     * Set estado
     *
     * @param string $estado
     *
     * @return Refrendos
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
     * Set fechapagado
     *
     * @param \DateTime $fechapagado
     *
     * @return Refrendos
     */
    public function setFechapagado($fechapagado)
    {
        $this->fechapagado = $fechapagado;

        return $this;
    }

    /**
     * Get fechapagado
     *
     * @return \DateTime
     */
    public function getFechapagado()
    {
        return $this->fechapagado;
    }

    /**
     * Set fechavencimiento
     *
     * @param \DateTime $fechavencimiento
     *
     * @return Refrendos
     */
    public function setFechavencimiento($fechavencimiento)
    {
        $this->fechavencimiento = $fechavencimiento;

        return $this;
    }

    /**
     * Get fechavencimiento
     *
     * @return \DateTime
     */
    public function getFechavencimiento()
    {
        return $this->fechavencimiento;
    }

    /**
     * Set interes
     *
     * @param integer $interes
     *
     * @return Refrendos
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
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Refrendos
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
     * Set recargo
     *
     * @param integer $recargo
     *
     * @return Refrendos
     */
    public function setRecargo($recargo)
    {
        $this->recargo = $recargo;

        return $this;
    }

    /**
     * Get recargo
     *
     * @return integer
     */
    public function getRecargo()
    {
        return $this->recargo;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     *
     * @return Refrendos
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
     * Set iddatosgenerales
     *
     * @param \AppBundle\Entity\Datosgenerales $iddatosgenerales
     *
     * @return Refrendos
     */
    public function setIddatosgenerales(\AppBundle\Entity\Datosgenerales $iddatosgenerales = null)
    {
        $this->iddatosgenerales = $iddatosgenerales;

        return $this;
    }

    /**
     * Get iddatosgenerales
     *
     * @return \AppBundle\Entity\Datosgenerales
     */
    public function getIddatosgenerales()
    {
        return $this->iddatosgenerales;
    }
}

