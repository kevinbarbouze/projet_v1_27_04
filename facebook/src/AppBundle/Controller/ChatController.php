<?php
// src/AppBundle/Controller/ChatController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChatController
{
    /**
     * @Route("/chat")
     */
    public function chat()
    {
      return new Response(
        '<html><body></body></html>'
      );
    }
}

/*
require('connexion.php');
if(isset($_POST['submit'])){ // si on a envoyé des données avec le formulaire


   // si les variables ne sont pas vides
  if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){

        $pseudo = $_POST['pseudo'];
        $message = $_POST['message']; // on sécurise nos données

        // puis on entre les données en base de données :
        $insertion = $bdd->prepare('INSERT INTO messages VALUES("", :pseudo, :message)');
        $insertion->bindParam(':pseudo',$pseudo, PDO::PARAM_STR);
        $insertion->bindParam(':message',$message, PDO::PARAM_STR);
        $insertion->execute();

}

    else{
        echo "Vous avez oublié de remplir un des champs !";
    }


}
*/

/*
try
{
    $dsn = 'mysql:dbname=humhub;host=localhost';
    $user = 'root';
    $password = '';
    $bdd = new PDO($dsn,$user,$password);
      echo 'connexion reussi';
      echo '<br>';

}


catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

// on récupère les derniers messages postés
        $requete = $bdd->query('SELECT * FROM messages ORDER BY id DESC');

        while($donnees = $requete->fetch()){
            // on affiche le message (l'id servira plus tard)
            echo "<p id=\"" . $donnees['id'] . "\">" . $donnees['auteur'] . " dit : " . $donnees['message'] . "</p>";
        }

        $requete->closeCursor();

    ?>
*/
