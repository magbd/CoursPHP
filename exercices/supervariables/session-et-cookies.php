<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Variables superglobales, sessions et cookies</title>
</head>
<body>

  <h2>Exercice 1</h2>
  <!-- Faire une page HTML permettant de donner à l'utilisateur :
  • son User Agent
  • son adresse ip
  • le nom du serveur -->
  <?php
  $userAgent = $_SERVER['HTTP_USER_AGENT'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $serveur = $_SERVER['SERVER_NAME'];

  echo '<p>User Agent : '.$userAgent.'</p>';
  echo '<p>Adresse IP : '.$ip.'</p>';
  echo '<p>Nom du serveur : '.$serveur.'</p>';
  ?>

  <h2>Exercice 2</h2>
  <!-- Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des
  variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.
  Il faudra afficher le contenu de ces variables sur la deuxième page. -->
  <?php
  $_SESSION['nom'] = 'Baude';
  $_SESSION['prenom'] = 'Magali';
  $_SESSION['age'] = 32;
  ?>

  <p>Page Accueil, bonjour <?php echo $_SESSION['prenom']; ?> !</p>

  <a href="renvoi-session.php" target="_blank">Lien vers la seconde page ...</a>

  <h2>Exercice 3 et 4</h2>
  <!-- Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la
  validation du formulaire, stocker les informations dans un cookie. -->
  <!-- Faire une page qui va récupérer les informations du cookie créé et les afficher. -->

  <form class="" action="cookies.php" method="post">
    Login : <input type="text" name="inputLogin">
    Password : <input type="password" name="inputPassword">
    <input type="submit" name="valider" value="Valider">
  </form>


  <?php
  echo '<p>Votre login est : '.$_COOKIE['login'].'</p>';
  echo '<p>Votre mot de passe est : '.$_COOKIE['password'].'</p>';

  var_dump($_COOKIE['login']);
  ?>

</body>
</html>
