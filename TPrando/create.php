<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>

<body>

	<!-- affichage du header -->
	<?php include ('header.php'); ?>

	<div class="container main">

	<!-- LIEN PAGE READ -->
	<td><a class="buttonRead" href="read.php">Liste<br>des randos</a></td>

	<!-- <a href="read.php">Liste des données</a> -->
	<h2>Ajouter</h2>

	<div class="formulaire">

	<form action="create.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<div>
			<label for="city">Lieu (ville)</label>
			<input type="text" name="city" value="">
		</div>
		<button class="button buttonSubmit" type="submit" name="button">Envoyer</button>
	</form>

</div>
	<?php



	//Si POST valider est activé et que les champs ne sont pas vide
	if(isset($_POST['button']) && !empty($_POST['name']) && !empty($_POST['distance']) && !empty($_POST['duration']) && !empty($_POST['height_difference']) && !empty($_POST['city'])){

		//mémorise les données POST dans des variables avec html specialchars pour sécurité faille XSS
		$name = htmlspecialchars($_POST['name']);
		$difficulty = $_POST['difficulty'];
		$distance = htmlspecialchars($_POST['distance']);
		$duration = htmlspecialchars($_POST['duration']);
		$height_difference = htmlspecialchars($_POST['height_difference']);
		$city = htmlspecialchars($_POST['city']);

		// //vérifie le format du champ duration
		// function time($duration){
		//
		// }

		//connecte la base de donnée
		include('connect_bdd.php');

		//requête préparée
		$requete = $bdd->prepare('INSERT INTO hiking(name, difficulty, distance, duration, height_difference, city) VALUES(?, ?, ?, ?, ?, ?)');
		$requete->execute(array($name, $difficulty, $distance, $duration, $height_difference, $city));

		echo '<p>La randonée a été ajoutée avec succès !</p>';

	}
	// else {
	// 	echo 'Le formulaire n\'a pas été envoyé';
	// }


	?>
	</div>

	<!-- affichage du footer -->
	<?php include ('footer.php'); ?>

</body>
</html>
