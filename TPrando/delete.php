<?php
/**** Supprimer une randonnée ****/

//connecte la base de donnée
include('connect_bdd.php');

//je récupère l'id dans l'URL
$getId = intval($_GET['id']); //convertit la valeur en nombre
// echo $getId;
////////////////////////////////////////////////////////////////////////////////
//DELETE LES DONNEES DE LA RANDO SELECTIONNEE DANS LA BASE DE DONNEE
////////////////////////////////////////////////////////////////////////////////

$req = $bdd->prepare('DELETE FROM hiking WHERE id = :getId');
// $req->execute(array('getId' => $getId));
// METODE BINDVALUE => type la donnée
$req->bindValue('getId', $getId, PDO::PARAM_INT);
$req->execute();

//redirige sur chat.php
header('Location: read.php');
?>
