<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Utilisateur;

class ProfileController extends DefaultController
{
   /**
   * @Route("/profile/{pseudo}", name="profile")
   */
   public function profile(Request $request)
   {
     //Requete DQL sur "pseudo"
     $em = $this->getDoctrine()->getManager();
     $query = $em->createQuery("SELECT u FROM Utilisateur WHERE  = u. = :nom ");  //TODO Users avec le même nom+prenom ???
     $profile = $query->getResult();
     //Creation du tableau de parametres de profil pour le template twig

     //Retour du template rempli

   }


   /**
   * @Route("/monprofil", name="monProfil")
   */
   public function monProfil()
   {
      $monPseudo = $this->getUser()->getNom().$this->getUser()->getPrenom();
        return $this->redirectToRoute('profile', array('pseudo' => $monPseudo));

   }
}
