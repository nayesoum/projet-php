<?php
include("../backend/appelbdd.php");
include("header.php");
// lié la base de donnée
/*lié le header et le footer avec un includ
 afficher 1 seul article
*/

$article = "";


if(isset($_GET ['id']) && is_numeric ($_GET ['id'])){
    $article = $_GET ['id'];
}else{
	die ('erreur');
}


//$reponse = $bdd->query($sql);
$rep = $bdd->query("SELECT * FROM `articles` WHERE `id` = '$article'");
$articleid = $rep->fetch();
?>
<div class="container">
    <div class="row">





			<div class="card col" style="width: 18rem;">
			  <img src="<?php echo $articleid['image'];?>" class="card-img-top" alt="...">
			  <div class="card-body">
				<h5 class="card-title"><?php echo $articleid['titre'];?></h5>
				<p class="card-text"><?php echo $articleid ['contenu'];?>.</p>
				
			  </div>
			</div>

</div>
</div>

<?php
include("../frontend/footer.php");
?>

