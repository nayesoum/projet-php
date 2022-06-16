<?php
session_start();
include("appelbdd.php");
include("headerback.php");
if($_SESSION['authentification'] == "OK"){

  if(isset($_POST['modifier'])  ) {
    $id = $_POST['id'];
    $title = $_POST['titre'];
    $img = $_POST['image'];
    $content = $_POST['contenu'];
    $datetime = $_POST['date'];
$sql= "UPDATE `article` SET `titre`='$title',`image`='$img',`contenu`='$content' WHERE `id`= '$id'";
$results = $bdd->query($sql);
header("location:accueil.php");
}
if(isset($_GET['id'])){
$id = $_GET['id'];
$formUpdatearticle = $bdd->query("SELECT * FROM `articles` WHERE `id`= $id");
$ok = $formUpdatearticle->fetch();
}
?>
<section> <!--formulaire de modification des admins-->
        <form action="accueil.php?id=<?php echo $ok['id'] ?>" method="post" style="padding:150px">
            <h2>Formulaire de modification d'article</h2>
            <label for="id">ID</label>
            <input type="text" name="idvisible" value="<?php echo $ok['id'];?>" disabled>
            <input type="hidden" name="id" value="<?php echo $ok['id'];?>">
            <label for="titre">titre</label>
            <input type="text" name="titre" value="<?php echo $ok['titre'];?>">
            <label for="img">image</label>
            <input type="text" name="email" value="<?php echo $ok['image'];?>">
            <label for="text">contenu</label>
            <input type="contenu" name="password" value="<?php echo $ok['contenu'];?>">
            <label for="date">date</label>
            <input type="date" name="date" value="<?php echo $ok['date'];?>">
            <button type="submit" name="modifier">Modifier</button>
        </form>
</section>
<?php
}  
include("../frontend/footer.php");
?>
// ici on va créer un formulaire de modification
/* 1 er etape relier la base de donnée
2 eme etape créer le formulaire
3 eme etape modifier la donnée */