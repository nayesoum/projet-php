<?php
// ici on va créer un formulaire de création
/* 1 er etape relier la base de donnée
2 eme etape créer le formulaire
3 eme etape enregistré la donnée */
session_start();
include("appelbdd.php");
if($_SESSION['authentification'] == "OK"){
//echo "salut";



  
       
        
   
    

    
    // if($_POST != null) {
    //     var_dump($_POST);
    //     $title = $_POST['titre'];
    //     $img = $_POST['image'];
    //     $category = $_POST['categorie'];
    //     $content = $_POST['contenu'];
    //     $datetime = $_POST['date'];
    if(isset($_POST['valide'])){
        var_dump($_POST);
            $title = $_POST['titre'];
            $img = $_POST['image'];
            $category = $_POST['categorie'];
            $content = $_POST['contenu'];
            $datetime = $_POST['date'];

        $sql="INSERT INTO articles (id, categorie, titre, image, contenu, date) VALUES (NULL,'$category', '$title', '$img', '$content', '$datetime')";
        $result = $bdd->query($sql);
        print_r($result);
        if($result){
          //echo"informations ajoutées avec succès";
          header('location:accueil.php');
        }else{
          die('Erreur : '.$e->getMessage());
        }
   /* if($title != null && $img != null && $category != null && $content != null && $datetime != null){
        $insert = $bdd->query ("INSERT INTO articles ('id', 'categorie', 'titre', 'image', 'contenu', 'date') VALUES (NULL, '$category', '$title', '$img', '$content', '$datetime')");
       if ($insert){
           echo "article créé";
         }else{
           echo "article non créé";
         }
        // $result = $bdd->exec("$");
      //  echo "article créé";
    }*/
    }
    include("headerback.php");
?>
<body>
    

 <form action="formcrea.php" method="post" class="row g-3">  
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Titre</label>
    <input type="text" name="titre"  class="form-control" id="validationDefault01" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Image</label>
    <input type="text"  name="image" class="form-control" id="validationDefault02" value="<?php ?>" required>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Catégorie</label>
    <input type="text" name="categorie" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Contenu</label>
    <!--<input type="text" name="contenu" class="form-control" id="validationDefault05" required>-->
    <textarea name="contenu" class="form-control" id="validationDefault05" rows="3"></textarea>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Date</label>
    <input type="text" name="date" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" name="valide">Submit form</button>
  </div>
</form>
                <?php
     
}
$post
    ?>
    </div>
    </div>
    
    <?php
    include("../frontend/footer.php");
    ?>