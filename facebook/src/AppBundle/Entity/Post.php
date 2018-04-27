<?php

namespace AppBundle\Entity;

/**
 * Post
 */
class Post
{
    /**
     * @var string
     */
    private $texte;

    /**
     * @var \DateTime
     */
    private $datePost;

    /**
     * @var \DateTime
     */
    private $heurePost;

    /**
     * @var boolean
     */
    private $visibilite;

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
     * @return Post
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
     * Set datePost
     *
     * @param \DateTime $datePost
     *
     * @return Post
     */
    public function setDatePost($datePost)
    {
        $this->datePost = $datePost;

        return $this;
    }

    /**
     * Get datePost
     *
     * @return \DateTime
     */
    public function getDatePost()
    {
        return $this->datePost;
    }

    /**
     * Set heurePost
     *
     * @param \DateTime $heurePost
     *
     * @return Post
     */
    public function setHeurePost($heurePost)
    {
        $this->heurePost = $heurePost;

        return $this;
    }

    /**
     * Get heurePost
     *
     * @return \DateTime
     */
    public function getHeurePost()
    {
        return $this->heurePost;
    }

    /**
     * Set visibilite
     *
     * @param boolean $visibilite
     *
     * @return Post
     */
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;

        return $this;
    }

    /**
     * Get visibilite
     *
     * @return boolean
     */
    public function getVisibilite()
    {
        return $this->visibilite;
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
     * @return Post
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
