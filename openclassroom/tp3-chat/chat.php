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


      <form action="chat_post.php" method="post">

        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo">

        <label for="message">Message</label>
        <textarea type="text" name="message" id="message"></textarea>

        <input type="submit" name="valider" value="ENVOYER" id="button">
      </form>

      <p id="baseline">
        UPTO PRODUCTION by MAG <br>
        <a href="https://github.com/magbd/CoursPHP/tree/master/openclassroom/tp3-chat">Fork me on Github</a>
      </p>

    </div>

    <div id="affichage">
      <?php
      $bdd = new PDO('mysql:host=localhost;dbname=miniChat', 'root', 'upto34', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      $reponse = $bdd->query('SELECT * FROM chat ORDER BY ID DESC LIMIT 10');

      while ($donnees = $reponse->fetch()){
        echo '<p><span>' . $donnees['pseudo'] . ' :</span> '. $donnees['message'] . '</p>'; //affiche les champs sélectionnés
      }
      ?>
    </div>

  </div>

</body>
</html>
