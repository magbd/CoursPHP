<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>

	<!-- affichage du header -->
	<?php include ('header.php'); ?>

	<div class="container main">

		<!-- LIEN PAGE READ -->
		<td><a class="buttonCreate" href="read.php">Liste<br>des randos</a></td>

		<!-- <a href="read.php">Liste des données</a> -->
		<h2>Modifier</h2>

		<?php

		//récupère l'id de la ligne à modifier dans variable $id
		// $getId = $_GET['id'];
		$getId = intval($_GET['id']); //convertit la valeur en nombre
		// echo 'ID de la rando : '.$getId;

		//connecte la base de donnée
		include('connect_bdd.php');

		if($getId <= 0) //id est invalide
		{
			echo 'Erreur ID invalide';
		}
		else
		{
			// Faites votre requête en toute confiance : un nombre entier, c'est inoffensif !


			////////////////////////////////////////////////////////////////////////////////
			//UPDATE LES DONNEES DE LA RANDO SELECTIONNEE DANS LES INPUT
			////////////////////////////////////////////////////////////////////////////////

			if(isset($_POST['button']) && !empty($_POST)){
				//UPDATE les nouvelles données

				//mémorise les données POST dans des variables avec html specialchars pour sécurité faille XSS
				$newName = htmlspecialchars($_POST['name']);
				$newDifficulty = $_POST['difficulty'];
				$newDistance = htmlspecialchars($_POST['distance']);
				$newDuration = htmlspecialchars($_POST['duration']);
				$newHeight_difference = htmlspecialchars($_POST['height_difference']);
				$newCity = htmlspecialchars($_POST['city']);

				// requete préparée pour UPDATE de la base hiking > bindValue
				$stmt = $bdd->prepare('UPDATE hiking SET
					name = :newName,
					difficulty = :newDifficulty,
					distance = :newDistance,
					duration = :newDuration,
					height_difference = :newHeight_difference,
					city = :newCity
					WHERE id = :getId'
				);

				// METODE BINDVALUE => type la donnée
				$stmt->bindValue('newName', $newName, PDO::PARAM_STR);
				$stmt->bindValue('newDifficulty', $newDifficulty, PDO::PARAM_STR);
				$stmt->bindValue('newDistance', $newDistance, PDO::PARAM_INT);
				$stmt->bindValue('newDuration', $newDuration, PDO::PARAM_STR);
				$stmt->bindValue('newHeight_difference', $newHeight_difference, PDO::PARAM_INT);
				$stmt->bindValue('newCity', $newCity, PDO::PARAM_STR);
				$stmt->bindValue('getId', $getId, PDO::PARAM_INT);

				$stmt->execute();

				//METHODE SIMPLIFIEE => sans typage donc int non reconnu > passe en string
				// $req->execute(array(
				// 	'newName' => $newName,
				// 	'newDifficulty' => $newDifficulty,
				// 	'newDistance' => $newDistance,
				// 	'newDuration' => $newDuration,
				// 	'newHeight_difference' => $newHeight_difference,
				// 	'newCity' => $newCity,
				// 	'getId' => $getId
				// ));

				echo '<p>La randonée a été modifiée avec succès !</p>';

			}

			////////////////////////////////////////////////////////////////////////////////
			//AFFICHAGE DES DONNEES DE LA RANDO SELECTIONNEE DANS LES INPUT
			////////////////////////////////////////////////////////////////////////////////

			//requête préparée des données à récupérer
			//je filtre quelle entrée je récupère => id
			$reponse = $bdd->prepare('SELECT * FROM hiking WHERE id= ?');
			// $requete->execute(array('id'));
			$reponse->execute(array($getId));



			//	echo $reponse->fetch();// renvoi chaque champs dans une variable $donnee
			while ($donnees = $reponse->fetch()){
				// echo 'Rando : '.$donnees['name'];

				?>

				<div class="formulaire">

					<form action="update.php?id=<?php echo $donnees['id'];?>" method="post">
						<div>
							<label for="name">Name</label>
							<input type="text" name="name" value="<?php echo $donnees['name']; ?>">
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
							<input type="text" name="distance" value="<?php echo $donnees['distance']; ?>">
						</div>
						<div>
							<label for="duration">Durée</label>
							<input type="duration" name="duration" value="<?php echo $donnees['duration']; ?>">
						</div>
						<div>
							<label for="height_difference">Dénivelé</label>
							<input type="text" name="height_difference" value="<?php echo $donnees['height_difference']; ?>">
						</div>
						<div>
							<label for="city">Ville</label>
							<input type="text" name="city" value="<?php echo $donnees['city']; ?>">
						</div>
						<button class="button buttonSubmit" type="submit" name="button">Envoyer</button>
					</form>

				</div>

				<?php

			}

		}

		?>

	</div>

	<!-- affichage du footer -->
	<?php include ('footer.php'); ?>

</body>
</html>
