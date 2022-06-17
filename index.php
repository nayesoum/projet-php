<?php
include("backend/appelbdd.php");// lié la base de donnée a ma page index.php
include("headerindex.php"); // lié mon header a ma page index.php

//ici je fait ma demande au prés de ma base de donnée
//$reponse= demande a ma base de donnée de selectionner les articles et de les classer par date et dans la limite de 5
$reponse = $bdd->query ("SELECT * FROM articles ORDER BY `date` LIMIT 5");

?>
<section class="titre">
    <h1> Bienvenue sur le blog des actualités LEGO </h1>
<img src="https://i.gifer.com/origin/d2/d278bd808bc521d69177c8c27efd9af0.gif">
</section>
<div class="container">
    <div class="row">

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" height="40rem" width="30rem" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img"src="https://www.hothbricks.com/wp-content/uploads/2022/05/60337-lego-city-passenger-train_1-2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="img" src="https://www.hothbricks.com/wp-content/uploads/2022/04/30390-lego-jurassic-world-dominion-dinosaur-market-polybag_1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img class="img" src="https://www.lalibre.be/resizer/zdx9I5umyEHEaj6Bj6TPglbJNxA=/768x512/filters:quality(70):format(jpg):focal(1324.5x1002:1334.5x992)/cloudfront-eu-central-1.images.arcpublishing.com/ipmgroup/7KICKYWT2BF7LH4Y5I42KJZEVA.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container" id="margin">
    <div class="row">

<?php
// fait une boucle si $donnée est egale a reponse a lors affiche les dans les cards a 5 reprises
while ($donnees = $reponse->fetch()){
?>
			<div class="card col" style="width: 18rem;">
			  <img src="<?php echo $donnees['image'];?>" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title"><?php echo $donnees['titre'];?></h5>
				<p class="card-text"><?php echo substr($donnees['contenu'],0,30);?>...</p>
				<a href="frontend/article.php?id=<?php echo $donnees['id'];?>" class="btn btn-outline-info">Lire la suite</a>
			  </div>
			</div>
			<?php
} 
?>
</div>
</div>
<?php
include("frontend/footer.php");// lie le footer avec un includ
?>
<?php //ici notre page principale qui regroupe les 5 dernier articles -->

/*lié le header et le footer avec un includ
 créer le body avec les cards
 afficher les 5 derniers articles 
*/?>


