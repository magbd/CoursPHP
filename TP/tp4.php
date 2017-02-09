<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <form name="formulaire" action="tp4.php" method="post">
    Votre nom : <input type="text" name="nom"><br>
    Votre prénom : <input type="text" name="prenom"><br>
    Votre âge : <input type="text" name="age"><br>
    Quelle est votre activité : <input type="text" name="activite"><br>
    <input type="submit" name="valider" value="Envoyer">
  </form>

  <?php

  if(isset($_POST['valider'])){
    echo'Vous venez de saisir : <br/>';
    foreach ($_POST as $key => $value) {
      if ($key != 'valider'){
        echo '- '.$key.' : '.$value.'<br/>';
      }
    }
  }

  ?>

</body>
</html>
