<?php 
// ici on va creer notre connexion a la base de donnée et le header et footer

try{
	$bdd = new PDO('mysql:host=localhost;dbname=lego;charset=utf8','root','');
	echo 'connexion OK';
}catch(Exception $e){
	die('Erreur : '.$e->getMessage());
}


?>



  