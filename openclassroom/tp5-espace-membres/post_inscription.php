<?php
if(isset($_POST['valider']) && !empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['mail'])){

  // // Vérification de la validité des informations
  // $pseudo = htmlspecialchars($_POST['pseudo']);
  // $mail = htmlspecialchars($_POST['mail']);
  // $confMail = htmlspecialchars($_POST['mail']);
  //
  // // Hachage du mot de passe
  // $pass_hache = sha1($_POST['password']);

    if($_POST[''])

  // Insertion
  $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(?, ?, ?, CURDATE())');
  $req->execute(array($pseudo, $password, $mail, $date_inscription));
}

?>
