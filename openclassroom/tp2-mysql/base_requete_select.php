<?php
//variable $bdd qui renvoie à la base de donnée test dans mySQL :
// $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'upto34');
//ajout code qui permet de traduire l'erreur SQL à l'écran :
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'upto34', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//EXEMPLES DE REQUETES SQL :
//variable qui contient la requête à la table jeux_videos de $bdd (=table test)
// $reponse = $bdd->query('SELECT * FROM jeux_video'); // * sélectionne TOUS les champs de la table
// $reponse = $bdd->query('SELECT console, nom FROM jeux_video'); //je spécifie les champs dont j'ai besoin (moins lourd que de tout charger)
// $reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console="NES" OR console="PC"'); //je filtre quels valeurs de champs je récupère
$reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY nom'); //je trie mes éléments par ordre alphabétique sur le champ 'nom'
// $reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY prix DESC'); //trie par prix décroissant
// $reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console="NES" OR console="PC" ORDER BY prix DESC LIMIT 5'); //je limite aux 5 premières entrées trouvées

//boucle qui parcours le tableau jeux_videos et renvoie chaque ligne (=entrée) dans une variable $donnee
while ($donnees = $reponse->fetch()){
  echo '<p>' . $donnees['console'] . ' - '. $donnees['nom'] . '</p>'; //affiche les champs sélectionnés
}
 ?>
