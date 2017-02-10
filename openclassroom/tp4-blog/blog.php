<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- <meta http-equiv="content-type" content="text/html; charset=utf-8" /> -->

  <title>TP Blog</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">



    <h1>Mon super blog !</h1>
    <p class="subtitle">Derniers billets du blog :</p>

    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=blog; charset=utf8', 'root', 'upto34', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM billets ORDER BY date_creation DESC');

    while ($donnees = $reponse->fetch()){

      echo
      '<div id="billet">

      <div id="titre"> <h3>' . $donnees['titre'] . ' <span>le '. $donnees['date_creation'] . '</span> </h3> </div>

      <div id="contenu" class="news"> <p> ' . $donnees['contenu'] . ' </p> </div>

      </div>';

    }
    ?>
  </div>

</body>
</html>
