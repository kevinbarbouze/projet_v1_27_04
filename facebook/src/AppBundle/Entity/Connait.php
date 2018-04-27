<?php

namespace AppBundle\Entity;

/**
 * Connait
 */
class Connait
{
    /**
     * @var boolean
     */
    private $etatRequete;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Utilisateur
     */
    private $idUtilisateur1;

    /**
     * @var \AppBundle\Entity\Utilisateur
     */
    private $idUtilisateur2;


    /**
     * Set etatRequete
     *
     * @param boolean $etatRequete
     *
     * @return Connait
     */
    public function setEtatRequete($etatRequete)
    {
        $this->etatRequete = $etatRequete;

        return $this;
    }

    /**
     * Get etatRequete
     *
     * @return boolean
     */
    public function getEtatRequete()
    {
        return $this->etatRequete;
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

    /**
     * Set idUtilisateur1
     *
     * @param \AppBundle\Entity\Utilisateur $idUtilisateur1
     *
     * @return Connait
     */
    public function setIdUtilisateur1(\AppBundle\Entity\Utilisateur $idUtilisateur1 = null)
    {
        $this->idUtilisateur1 = $idUtilisateur1;

        return $this;
    }

    /**
     * Get idUtilisateur1
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getIdUtilisateur1()
    {
        return $this->idUtilisateur1;
    }

    /**
     * Set idUtilisateur2
     *
     * @param \AppBundle\Entity\Utilisateur $idUtilisateur2
     *
     * @return Connait
     */
    public function setIdUtilisateur2(\AppBundle\Entity\Utilisateur $idUtilisateur2 = null)
    {
        $this->idUtilisateur2 = $idUtilisateur2;

        return $this;
    }

    /**
     * Get idUtilisateur2
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getIdUtilisateur2()
    {
        return $this->idUtilisateur2;
    }
}
