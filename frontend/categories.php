<?php
include("../backend/appelbdd.php");
include("header.php");



var_dump($_GET);

$sql = "SELECT * FROM `articles` WHERE ORDER BY date";

if(isset($_GET ['cat'])){
    $nom_categorie = $_GET ['cat'];
   
    $sql = "SELECT * FROM `articles` WHERE `categorie` = '".$nom_categorie."' ORDER BY date ";
}
$reponse = $bdd->query($sql);

?>
<div class="container">
    <div class="row">

<?php

while ($donnees = $reponse->fetch()){
?>
			<div class="card col" style="width: 18rem;">
			  <img src="<?php echo $donnees['image'];?>" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title"><?php echo $donnees['titre'];?></h5>
				<p class="card-text"><?php echo $donnees ['contenu'];?>.</p>
				
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