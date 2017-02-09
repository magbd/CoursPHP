<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Secret</title>
  </head>
  <body>

    <h2>Page secrète</h2>


    <?php

    $passwordOk = 'kangourou';

    if(isset($_POST['valider']) && $_POST['passwordSaisi'] === $passwordOk){
        echo '<h2>Accès à la page protégée autorisée !</h2>';
        ?>

        <p>Liste des codes secrets</p>
        <p>blablabla</p>
        <p>pleins de trucs top secrets</p>
        
        <?php
      }
      else {
        echo 'Vous ne disposez pas du bon mot de passe.';
      }
     ?>

  </body>
</html>
