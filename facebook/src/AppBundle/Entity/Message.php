<?php

namespace AppBundle\Entity;

/**
 * Message
 */
class Message
{
    /**
     * @var string
     */
    private $texte;

    /**
     * @var \DateTime
     */
    private $dateEnvoi;

    /**
     * @var \DateTime
     */
    private $heureEnvoi;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Utilisateur
     */
    private $idUtilisateur;


    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Message
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set dateEnvoi
     *
     * @param \DateTime $dateEnvoi
     *
     * @return Message
     */
    public function setDateEnvoi($dateEnvoi)
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    /**
     * Get dateEnvoi
     *
     * @return \DateTime
     */
    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }

    /**
     * Set heureEnvoi
     *
     * @param \DateTime $heureEnvoi
     *
     * @return Message
     */
    public function setHeureEnvoi($heureEnvoi)
    {
        $this->heureEnvoi = $heureEnvoi;

        return $this;
    }

    /**
     * Get heureEnvoi
     *
     * @return \DateTime
     */
    public function getHeureEnvoi()
    {
        return $this->heureEnvoi;
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
     * Set idUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $idUtilisateur
     *
     * @return Message
     */
    public function setIdUtilisateur(\AppBundle\Entity\Utilisateur $idUtilisateur = null)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return \AppBundle\Entity\Utilisateur
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }
}
