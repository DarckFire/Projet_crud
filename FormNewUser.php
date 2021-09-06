<?php
	include 'ClassCRUD.php';
	include 'MaFonctionTableaux.php';
	
	$id = $_GET["id"];
	if ($id == 0) {
		$crud = new create();
		$liste = $crud->getNewUser();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$test = new read();
		$liste = $test->readUser($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}
	
	


?>

<html>
	<header>
		<link rel="stylesheet" href="assets/style/Formulaire.css">
	</header>
	<body>

			
		<form action="MesFunctionFormulaire.php" method="GET">
			<p>	
				<a href="index.php">Liste des utilisateurs</a>

				<input type="hidden" name="id" value="<?php echo $liste['id'];  ?>"/>
				<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
				<div>
					<label for="name">Nom :</label>
					<input type="text" id="nom" name="nom"> 
				</div>
				<div>
					<label for="prenom">Prenom</label>
					<input type="text" id="prenom" name="prenom">
				</div>
				<div>
					<label for="age">Age:</label>
					<input type="text" id="age" name="age">
				</div>
				<div>
					<label for="age">sexe:</label>
					<input type="text" id="sexe" name="sexe">
				</div>
				<div>
					<label for="adresse">adresse :</label>
					<textarea id="adresse" name="adresse" ></textarea>
				</div>
				<div class="button">
					<button type="submit"><?php echo $libelle;  ?></button>
				</div>
			</p>
		</form>
		<br>

		<?php if ($action!="CREATE") { ?>
			<form action="MesFunctionFormulaire.php" method="GET">
				<input type="hidden" name="action" value="DELETE"/>
				<input type="hidden" name="id" value="<?php echo $liste['id'];  ?>"/>
				<p>
				<div class="button">
					<button type="submit">Supprimer</button>
				</div>
				</p>
			</form>
		<?php } ?>

	</body>
</html>