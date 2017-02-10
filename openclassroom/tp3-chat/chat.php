<!DOCTYPE html>
<html>
<head>
  <!-- favicon -->
  <link rel="icon" type="image/svg" href="img/favicon.svg">

  <meta charset="utf-8">

  <title>Mini chat</title>

  <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Raleway" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div id="container">

    <div id="gauche">

      <div id="titre">
        <div class="rond"></div>
        <h1>Mini chat</h1>
        <p id="subtitle">Exercice PHP - MySQL</p>
      </div>

      <!-- Formulaire -->
      <form action="chat_post.php" method="post">

        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" value=<?php echo $_COOKIE['pseudo']; ?>>

        <label for="message">Message</label>
        <textarea type="text" name="message" id="message"></textarea>

        <input type="submit" name="valider" value="ENVOYER" id="button">
      </form>

      <p id="baseline">
        UPTO PRODUCTION by MAG <br>
        <a href="https://github.com/magbd/CoursPHP/tree/master/openclassroom/tp3-chat" target="_blank">Fork me on Github</a>
      </p>

    </div>

    <div id="affichage">
      <?php
      //appel la base de donnée
      $bdd = new PDO('mysql:host=localhost;dbname=miniChat', 'root', 'upto34', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      //requête avec filtres et tri des données à récupérer
      $reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_creation, "Envoyé le %d/%m/%Y à %Hh %imin %ss") AS date FROM chat ORDER BY ID DESC LIMIT 10');

      // boucle qui affiche les champs sélectionnés dans la base
      while ($donnees = $reponse->fetch()){
        echo '<p id="reponse"><span>' . $donnees['pseudo'] . ' :</span> '. $donnees['message'] . '</p> <p id="date">' . $donnees['date'] . '</p>';
      }
      ?>
    </div>

  </div>

</body>
</html>
