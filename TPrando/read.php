<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Randonnées</title>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>

  <!-- affichage du header -->
  <?php include ('header.php'); ?>

  <div class="container main">

    <!-- LIEN PAGE CREATE -->
    <td><a class="buttonCreate" href="create.php">Ajouter</a></td>

    <h2>Liste des randonnées</h2>

    <table>
      <thead>
        <tr>

          <th>Nom</th>
          <th>Difficulté</th>
          <th>Distance</th>
          <th>Durée</th>
          <th>Dénivelé</th>
          <th>Ville</th>

        </tr>
      </thead>

      <tbody>

        <!-- Afficher la liste des randonnées -->
        <?php
        //connecte la base de donnée
        include('connect_bdd.php');

        //requête des données à récupérer
        $reponse = $bdd->query('SELECT id, name, difficulty, distance, height_difference, city, DATE_FORMAT(duration, "%H h %i") AS duration FROM hiking');

        // boucle qui affiche les champs sélectionnés dans la base
        while ($donnees = $reponse->fetch()){
          ?>

          <tr>
            <td><?php echo $donnees['name']; ?></td>
            <td><?php echo $donnees['difficulty']; ?></td>
            <td><?php echo $donnees['distance']; ?> km</td>
            <td><?php echo $donnees['duration']; ?></td>
            <td><?php echo $donnees['height_difference']; ?> m</td>
            <td><?php echo $donnees['city']; ?></td>
            <!-- UPDATE -->
            <!-- Dans le lien, ajout de l'ID => update.php?ID=? -->
            <td><a class="button buttonUpdate" href="update.php?id=<?php echo $donnees['id']; ?>">Modifier</a></td>
            <!-- DELETE -->
            <!-- Dans le lien, ajout de l'ID => delete.php?ID=? -->
            <td><a class="button buttonDelete" href="delete.php?id=<?php echo $donnees['id']; ?>">Supprimer</a></td>
          </tr>

          <?php
        }

        ?>
      </tbody>

    </table>

  </div>

  <!-- affichage du footer -->
  <?php include ('footer.php'); ?>

</body>
</html>
