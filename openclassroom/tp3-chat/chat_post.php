<?php
//Si POST valider est activé et que les champs pseudo et message ne sont pas vide
if(isset($_POST['valider']) && !empty($_POST['pseudo']) && !empty($_POST['message'])){

  //mémorise les données POST dans des variables avec html specialchars pour sécurité faille XSS
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $message = htmlspecialchars($_POST['message']);

  //création du cookie pour qu'il s'affiche dans l'input du pseudo
  $expire = 365*24*3600;
  setcookie('pseudo', $pseudo, time()+$expire);

  //appelle la base de donnée
  $bdd = new PDO('mysql:host=localhost;dbname=miniChat', 'root', 'upto34', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  //requête préparée
  $requete = $bdd->prepare('INSERT INTO chat(pseudo, message) VALUES(? , ?)');
  $requete->execute(array($pseudo, $message));
}
//redirige sur chat.php
header('Location: chat.php');

?>
