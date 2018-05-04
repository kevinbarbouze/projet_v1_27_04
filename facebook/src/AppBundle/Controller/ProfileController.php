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
   public function profile(Request $request, $pseudo)
   {
     //Requete DQL sur "pseudo"
     $repo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Utilisateur');
     //$query = $em->createQuery("SELECT u FROM Utilisateur WHERE  = u.id = :id ");
     //$profile = $query->getResult();
     $user = $repo->findOneBy(['id' => $pseudo]);

     if($user == null){
       $this->redirectToRoute('profile_not_found');
     }

     //Creation du tableau de parametres de profil pour le template twig
     //Retour du template rempli
     return $this->render('profile.html.twig', array(
            'nom' => $user->getNom(),
            'prenom'         => $user->getPrenom(),
            'bio'         => $user->getBio(),
        ));
   }


   /**
   * @Route("/monprofil", name="mon_profil")
   */
   public function monProfil()
   {
      $monId = $this->getUser()->getId();
        return $this->redirectToRoute('profile', array('pseudo' => $monId));

   }
}
