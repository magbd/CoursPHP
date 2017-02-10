<?php
/////////////////////////////////////////////////////////////////////////////
//INSERT
// __________________________
// DEPUIS PHP en requête préparée (=> valeurs définies par entrée utilisateur) :
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'upto34', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$requete = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur) VALUES(? , ?)');
$requete->execute(array($_GET['nom'], $_GET['possesseur']));

/////////////////////////////////////////////////////////////////////////////
//UPDATE
// __________________________
// DEPUIS MYSQL :

// UPDATE jeux_video SET possesseur = 'Jean' WHERE possesseur = 'Mathieu'
// MODIFIE dans jeux_videos LE CHAMP possesseur par Jean POUR tous les champs possesseur qui contienent Mathieu

// __________________________
// DEPUIS PHP :
// $bdd->exec('UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE nom = \'Battlefield 1942\'');

// __________________________
// DEPUIS PHP en requête préparée :
// $req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
// $req->execute(array(
//   'nvprix' => $nvprix,
//   'nv_nb_joueurs' => $nv_nb_joueurs,
//   'nom_jeu' => $nom_jeu
// ));

/////////////////////////////////////////////////////////////////////////////
//DELETE
// __________________________
// DEPUIS MYSQL :
// DELETE FROM jeux_videos WHERE ID = 51
// SUPPRIME la ligne 51

//////////////////////////////////////////////////////////////////////////////////
?>
