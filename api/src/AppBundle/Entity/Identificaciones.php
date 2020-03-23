<?php

namespace AppBundle\Entity;

/**
 * Identificaciones
 */
class Identificaciones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdat;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $updatedat;


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
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return Identificaciones
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
     * @return Identificaciones
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
     * Set updatedat
     *
     * @param \DateTime $updatedat
     *
     * @return Identificaciones
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
}

