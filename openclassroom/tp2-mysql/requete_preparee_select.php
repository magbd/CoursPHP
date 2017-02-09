<?php
if (isset($_GET['console'])){
  //ajout code qui permet de traduire l'erreur SQL à l'écran :
  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'upto34', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  $requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console= ?'); //je filtre quels valeurs de champs je récupère
  // $requete->execute(array('NES'));
  $requete->execute(array($_GET['console'])); // ajouter ?console=NES dans l'URL
  //boucle qui parcours le tableau jeux_videos et renvoie chaque ligne (=entrée) dans une variable $donnee
  while ($donnees = $requete->fetch()){
    echo '<p>' . $donnees['console'] . ' - '. $donnees['nom'] . '</p>'; //affiche les champs sélectionnés
  }
}
else {
  echo 'ajoutez un choix de console directement dans l\'URL (exemple : ?console=NES)';
}
?>
