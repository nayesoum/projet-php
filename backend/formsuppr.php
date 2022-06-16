<?php
include("appelbdd.php");
include("headerback.php");

if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ?! Tu n'as pas précisé l'id de l'article !");
}

$id = $_GET['id'];
$query = $bdd->prepare('SELECT * FROM articles WHERE id = :id');
$query->execute(['id' => $id]);
if ($query->rowCount() === 0) {
    die("L'article $id n'existe pas, vous ne pouvez donc pas le supprimer !");
}
$query = $bdd->prepare('DELETE FROM articles WHERE id = :id');
$query->execute(['id' => $id]);
header("Location: accueil.php");
exit();
?>
<body>
<section> <!--formulaire authentification des admins-->
        <form action="delete-admin.php" method="post" style="padding:150px">
            <h2>Formulaire de suppression d'admin</h2>
            <label for="id">ID</label>
            <input type="text" name="idvisible" value="<?php echo $donnees['id'];?>" disabled>
            <input type="hidden" name="id" value="<?php echo $donnees['id'];?>">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" value="<?php echo $donnees['pseudo'];?>" disabled>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $donnees['email'];?>" disabled>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" value="<?php echo $donnees['password'];?>" disabled>
            <button type="submit" name="supprimer">Supprimer</button>
        </form>
</section>

    
</body>
</html>

// ici on va créer un formulaire de suppression
/* 1 er etape relier la base de donnée
2 eme etape créer le formulaire
3 eme etape supprimé la donnée */















<?php
include("../frontend/footer.php");