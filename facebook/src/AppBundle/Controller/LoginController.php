<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Role;


class LoginController extends DefaultController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authUtils)
    {

      //Utilisateur deja authentifié
      if($this->getUser() != null){
          $redir =  $this->redirectToRoute('mon_profil');

          $roles = $this->getUser()->getRoles();


          if(in_array("ROLE_ADMIN",$roles)){
              //TODO Route admin
              $redir =  $this->redirectToRoute('admin');
          }else{
            //TODO Route user
              $redir =  $this->redirectToRoute('mon_profil');

          }
      }else {
        $redir = $this->render('login.html.twig');
      }

        return $redir;
    }


    /**
     * @Route("/logout", name="logout")
     */
    public function logout(Request $request, AuthenticationUtils $authUtils)
    {
        return $this->login();
    }

    /**
    * @Route("/register", name="register")
    */
   public function register(Request $request)
   {

       if ($request->getMethod() == "POST") {

//Recuperation  des donnee de formulaire dans un tableau associatif "$params"

           $params['nom'] = $request->request->get('nom');
           $params['prenom'] = $request->request->get('prenom');
           $params['email']  = $request->request->get('email');
           $params['password']  = $request->request->get('password');
           $pass2 = $request->request->get('password2');

           if(! preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $params['email'])) {
               echo "Entrer mail valide";
           }else if ($params['password'] != $pass2) {
               echo "Entrer pass valide";
           }else{
              //// TODO: Requete méthode
              $em = $this->getDoctrine()->getManager();

              $user = new Utilisateur();
              $user->setNom($params['nom']);
              $user->setPrenom($params['prenom']);
              $user->setEmail($params['email']);
              $user->setPassword($params['password']);

              $role = $em->getRepository('AppBundle:Role')->find(1); //User
              $user->setIdRole($role); //Role User

              $em->persist($user);

              $em->flush();



           }
            return $this->redirectToRoute('login');
       }
   }



}
