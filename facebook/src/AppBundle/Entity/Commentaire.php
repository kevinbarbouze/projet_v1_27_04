<?php

namespace AppBundle\Entity;

/**
 * Commentaire
 */
class Commentaire
{
    /**
     * @var string
     */
    private $texte;

    /**
     * @var \DateTime
     */
    private $dateCommentaire;

    /**
     * @var string
     */
    private $heureCommentaire;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Post
     */
    private $idPost;

    /**
     * @var \AppBundle\Entity\Utilisateur
     */
    private $idUtilisateur;


    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Commentaire
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
     * Set dateCommentaire
     *
     * @param \DateTime $dateCommentaire
     *
     * @return Commentaire
     */
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    /**
     * Get dateCommentaire
     *
     * @return \DateTime
     */
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set heureCommentaire
     *
     * @param string $heureCommentaire
     *
     * @return Commentaire
     */
    public function setHeureCommentaire($heureCommentaire)
    {
        $this->heureCommentaire = $heureCommentaire;

        return $this;
    }

    /**
     * Get heureCommentaire
     *
     * @return string
     */
    public function getHeureCommentaire()
    {
        return $this->heureCommentaire;
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
     * Set idPost
     *
     * @param \AppBundle\Entity\Post $idPost
     *
     * @return Commentaire
     */
    public function setIdPost(\AppBundle\Entity\Post $idPost = null)
    {
        $this->idPost = $idPost;

        return $this;
    }

    /**
     * Get idPost
     *
     * @return \AppBundle\Entity\Post
     */
    public function getIdPost()
    {
        return $this->idPost;
    }

    /**
     * Set idUtilisateur
     *
     * @param \AppBundle\Entity\Utilisateur $idUtilisateur
     *
     * @return Commentaire
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
