<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TP5</title>
</head>
<body>

  <form action="tp5.php" method="post">
    Saisir un entier positif : <input type="text" name="nombre">
    <input type="submit" name="valider" value="Envoyer">
  </form>

  <?php
  if(isset($_POST['valider'])){
    $nombre = $_POST['nombre']; //mémorise input dans variable $nombre
    $test = premier($nombre); // $test prends pour valeur le résultat de l'exécution de la fonction premier() avec $nombre en argument
    echo'Vous avez saisis '.$nombre.'.<br/>'.$nombre.' '.$test;
  }

  function premier($n){
    if($n == 0 || $n == 1){
      $test = 'n\'est pas un nombre premier';
      return $test; //sors de la boucle et retourne le resultat
    }

    for ($i=2; $i < $n; $i++){
      if($n % $i == 0){
        //je divive n par chaque valeur in (sauf 0 et 1),
        //si pas de reste de division, le nombre est donc divisible par autre que 1 et lui même,
        //donc ce n'est pas un nombre premier
        $test = 'n\' est pas un nombre premier';
        return $test; //sors de la boucle et retourne le resultat
      }
    }
    //si les deux conditions précédentes ne sont pas OK donc $n est premier
    $test = 'est un nombre premier';
    //retourne le résultat
    return $test;
  }

  ?>

</body>
</html>
