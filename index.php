<?php
include("backend/appelbdd.php");
include("frontend/header.php");


$reponse = $bdd->query ("SELECT * FROM articles ORDER BY `date` LIMIT 5");



while ($donnees = $reponse->fetch()){
?>
			<div class=“card” style=“width: 18rem;“>
			  <img src=“<?php echo $donnees['image'];?>” class=“card-img-top” alt=“...“>
			  <div class=“card-body”>
				<h5 class=“card-title”><?php echo $donnees['titre'];?></h5>
				<p class=“card-text”>Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
				<a href=“article.php?identifiant=<?php $donnees['id'];?>” class=“btn btn-primary”>Lire la suite</a>
			  </div>
			</div>
			<?php
} 



include("frontend/footer.php");
?>
<?php //ici notre page principale qui regroupe les 5 dernier articles -->

/*lié le header et le footer avec un includ
 créer le body avec les cards
 afficher les 5 derniers articles 
*/?>


