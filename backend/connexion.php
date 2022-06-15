<?php
session_start();
include("appelbdd.php");





if($_POST != null){
  $email = $_POST['mail'];
  $pwd = $_POST['pass'];

$reponse = $bdd->query("SELECT  FROM `lego` WHERE `email` = '$mail' AND `password` = '$pwd'");

     if ($reponse === $_POST['mail'] && $_POST['pass']){
        $base = ("SELECT * FROM `user` WHERE `email` = '$mail' AND `password`= '$pwd'");
        // echo "authentification reussie"
        // $historique[]
        }else{
        echo"authentification a echouée";
        }

        echo "bonjour";
 }
//essaie de te connecter a la b
// page identification 
/* ici on va avoir 2 input avec le mail et le mot de passe
via un formulaire de connexion

 1 er etape lié la base de donnée
 2eme etape crééer le formulaire
 3 eme etape verifier si l'utilisateur existe
 4 etape si l'utilisateur existe le renvoyer vers la page administrateur
 ou sinon renvoyer message d'erreur
*/
$_SESSION['authentification'] = "OK";



?>
<html>
<body>
    <div class="formulaire">
      <form action="accueil.php" method="post">
        <h3>connexion</h3>
        <label for="mail">Vous connecter ici</label>
        <input type="email" name="mail" placeholder="Votre email" />
        <input type="password" name="pass" id="pass"placeholder="votre mot de passe"/>
        <input type="submit" value="validé" />
      </form>
    </div>
  </body>
</html>