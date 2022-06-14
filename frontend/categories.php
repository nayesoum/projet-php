<?php
include("../backend/appelbdd.php");
include("header.php");

$reponse = $bdd->query ("SELECT * FROM `articles` WHERE `categorie` = 'Jurassic_Park' ORDER BY date");
$nom_categorie = $_GET ['categorie'];
$title = $_GET ['titre'];
$img = $_GET ['image'];

$sql = "SELECT * FROM `articles` WHERE `categorie` = `.$_GET[‘categorie’].`  ";
?>
<div class="container">
    <div class="row">
    SELECT * FROM `articles` WHERE `categorie` LIKE 'Star_Wars'
<?php

while ($donnees = $reponse->fetch()){
?>
			<div class="card col" style="width: 18rem;">
			  <img src="<?php echo $donnees['image'];?>" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title"><?php echo $donnees['titre'];?></h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
				<a href="article.php?identifiant=<?php $donnees['id'];?>" class="btn btn-primary">Lire la suite</a>
			  </div>
			</div>
			<?php
} 
?>
</div>
</div>

<?php
include("footer.php");
?>
<?php
// lié la base de donnée
/*lié le header et le footer avec un includ
 afficher la catégorie de l'article selectionner
 
*/
?>