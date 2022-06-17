<?php
include("../backend/appelbdd.php");// ici on doit faire le chemin les 2 petits point vont nous faire sortir dans le frontend pour aller dans le backend
include("header.php");

// ici je fait une requete pour afficher tous les articles par date de creation
//le sql est un langage de requete qui permet de faire des requetes sur la base de donnée
$sql = "SELECT * FROM `articles` WHERE ORDER BY date";

// si la categorie est definie on l'utilise
//si tu va me chercher une categorie et quelle est pas null 
if(isset($_GET ['cat'])){
    $nom_categorie = $_GET ['cat'];
   //alors affiche moi les articles de cette categorie
    $sql = "SELECT * FROM `articles` WHERE `categorie` = '".$nom_categorie."' ORDER BY date ";
}
$reponse = $bdd->query($sql);

?>
<div class="container">
    <div class="row">

<?php
//ici fait une boucle si donnée est egale a reponse alors affiche moi les données
while ($donnees = $reponse->fetch()){
?>
			<div class="card col" style="width: 18rem;">
			  <img src="<?php echo $donnees['image'];?>" class="card-img-top" alt="...">le echo veut dire affiche la donnée
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