<?php
if(isset($_POST['valider']) && !empty($_POST['pseudo']) && !empty($_POST['message'])){

  $pseudo = htmlspecialchars($_POST['pseudo']);
  $message = htmlspecialchars($_POST['message']);
  // echo 'J\'ai saisi le pseudo : '.$pseudo.' et le message : '.$message.'</br>';

  $bdd = new PDO('mysql:host=localhost;dbname=miniChat', 'root', 'upto34', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $requete = $bdd->prepare('INSERT INTO chat(pseudo, message) VALUES(? , ?)');
  $requete->execute(array($pseudo, $message));
}
header('Location: chat.php'); //redirige sur chat.php

?>
