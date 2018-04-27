<?php

namespace AppBundle\Entity;

/**
 * Role
 */
class Role
{
    /**
     * @var string
     */
    private $intitule;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Role
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Role
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }//tiens bien vu

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

}
