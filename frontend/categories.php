<?php
include("../backend/appelbdd.php");
include("header.php");

$reponse = $bdd->query ("SELECT * FROM `articles` WHERE `categorie` = 'Jurassic Park' ORDER BY date");
?>

<?php
include("footer.php");
?>
<?php
// lié la base de donnée
/*lié le header et le footer avec un includ
 afficher la catégorie de l'article selectionner
 
*/
?>