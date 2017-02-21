<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Les Paramètres d'URL - PHP</title>
</head>
<body>

  <h2>Exercice 1</h2>
  <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les
  afficher -->

  <!-- Ajouter à la fin de l'URL : ?nom=Nemare&prenom=Jean -->
  <p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> !</p>

  <h2>Exercice 2</h2>
  <!-- Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher
  sinon le signaler -->
  <?php
  if(isset($_GET['age'])){
    echo $_GET['age'];
  }
  else {
    echo 'Vous n\'avez pas saisi d\'âge';
  }
  ?>

  <h2>Exercice 3</h2>
  <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les
  afficher -->

  <!-- Saisir : ?dateDebut=2/05/2016&dateFin=27/11/2016 -->
  <?php
  if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
    echo '<p> Date de début : '.$_GET['dateDebut'].'</p>';
    echo '<p> Date de début : '.$_GET['dateFin'].'</p>';
  }
  ?>

  <h2>Exercice 4</h2>
  <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les
  afficher -->

  <!-- Saisir : ?langage=PHP&serveur=LAMP -->
  <?php
  if(isset($_GET['langage']) && isset($_GET['serveur'])) {
    $langage = $_GET['langage'];
    $serveur = $_GET['serveur'];
    echo '<p> Langage : '.$langage.'</p>';
    echo '<p> Serveur : '.$serveur.'</p>';
  }
  ?>

  <h2>Exercice 5</h2>
  <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les
  afficher -->

  <!-- Saisir : ?semaine=12 -->
  <?php
  if(isset($_GET['semaine'])) {
    echo '<p> Numéro de semaine : '.$_GET['semaine'].'</p>';
  }
  ?>

  <h2>Exercice 6</h2>
  <!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les
  afficher -->

  <!-- Saisir : ?batiment=12&salle=101 -->
  <?php
  if(isset($_GET['batiment']) && isset($_GET['salle'])) {
    echo '<p> Bâtiment : '.$_GET['batiment'].'</p>';
    echo '<p> Salle : '.$_GET['salle'].'</p>';
  }
  ?>

</body>
</html>
