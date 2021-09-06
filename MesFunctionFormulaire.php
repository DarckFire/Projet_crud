<?php
	include 'ClassCRUD.php';
	include 'MaFonctionTableaux.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$nom = $_GET["nom"];
		$prenom = $_GET["prenom"];
		$age = $_GET["age"];
		$sexe = $_GET["sexe"];
		$adresse = $_GET["adresse"];
	    	
	}
	

	if ($action == "CREATE") {
		$crud = new create();
	    $liste = $crud->createUser($nom, $prenom, $age, $sexe, $adresse);
		echo "Bravo vous etes inscript  <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
		
	}
	
	if ($action == "UPDATE") {
	    $update = new update();
	    $liste = $update->updateUser($id, $nom, $prenom, $age, $sexe, $adresse);
		echo "Informations Mise à jour <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}
	if ($action == "DELETE") {
		$delete = new delete();
	    $liste = $delete->deleteUser($id);
		echo "Utilisateur Supprimé <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}
	

	
?>