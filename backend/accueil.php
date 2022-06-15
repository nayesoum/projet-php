<?php
/* Vérification Authentification*/
session_start();
include("appelbdd.php");
include("../frontend/header.php");
if($_SESSION['authentification'] == "OK"){


    $reponse = $bdd->query ("SELECT * FROM articles ORDER BY `date`");

    ?>
    <button><a href="formcrea.php"> Création</a></button>
    <div class="container">
        <div class="row">
    
    <?php
    
    while ($donnees = $reponse->fetch()){
    ?>
                <div class="card col" style="width: 18rem;">
                  <img src="<?php echo $donnees['image'];?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $donnees['titre'];?></h5>
                    <p class="card-text"><?php echo $donnees ['date'];?></p>
                    <button> <a href="formmodif.php"> Modification</a></button>
                    <button> <a href="formsuppr.php"> Suppression</a></button>
                  </div>
                </div>
                <?php
    } 
}
    ?>
    </div>
    </div>


<?php
/* ici on va creer une page lorsque l'utilisateur est connecter 
on va creer 3 bouton creer modifier et supprimer 
les boutton vont nous ramener sur les pages correspondante 

1er etape créer un boution crée
2eme etape creer un bouton modifier
3eme etape créer un bouton suprimer un article
*/
include("../frontend/footer.php");
?>