<?php
// ici on va créer un formulaire de création
/* 1 er etape relier la base de donnée
2 eme etape créer le formulaire
3 eme etape enregistré la donnée */
session_start();
include("appelbdd.php");
if($_SESSION['authentification'] == "OK"){
echo "salut";

?>

    <html>
        <body>
            
        
    <form class="row g-3">
    
<?php
    
    if($_POST != null) {
        var_dump($_POST);
        $title = $_POST['titre'];
        $img = $_POST['image'];
        $category = $_POST['categorie'];
        $content = $_POST['contenu'];
        $datetime = $_POST['date'];
    
    if($title != null && $img != null && $category != null && $content != null && $datetime != null){
        $insert = $bdd->query ("INSERT INTO `articles` (`id`, `categorie`, `titre`, `image`, `contenu`, `date`) VALUES (NULL, '$category', '$title', '$img', '$content', '$datetime')");
        echo "article créé";
    }
    }
?>
              
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" name="titre"  class="form-control" id="validationDefault01" value="Mark" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text"  name="image" class="form-control" id="validationDefault02" value="Otto" required>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" name="categorie" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Zip</label>
    <input type="text" name="contenu" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Zip</label>
    <input type="text" name="date" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
                <?php
     
}
    ?>
    </div>
    </div>
    </body>
    </html>
    