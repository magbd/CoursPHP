prem<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <form name="formulaire" action="tp3.php" method="post">
    Entrez votre prénom : <input type="text" name="prenom"><br/>
    Entrez votre taille (sous la forme 1.70) : <input type="text" name="taille"><br/>
    Entrez votre poids (en kilos) : <input type="text" name="poids">
  <input type="submit" name="valider" value="OK">
  </form>

  <?php

if(isset($_POST['valider'])){
  $prenom = $_POST['prenom'];
  $taille = $_POST['taille'];
  $poids = $_POST['poids'];

  $imc = $poids/($taille*$taille);

  echo'Bonjour '.$prenom.'<br/>Ton IMC est de '.$imc.'<br/>';

  if ($imc < 16.5) {
    $verdict = 'Vous êtes en état de famine';
  }
  elseif ($imc < 18.5) {
    $verdict = 'Vous êtes en état de maigreur';
  }
  elseif ($imc < 25) {
    $verdict = 'Vous êtes en état de corpulence normale';
  }
  elseif ($imc < 30) {
    $verdict = 'Vous êtes en état de surpoids';
  }
  elseif ($imc < 35) {
    $verdict = 'Vous êtes en état d\'obésité modérée';
  }
  elseif ($imc < 40) {
    $verdict ='Vous êtes en état d\'obésité sévère';
  }
  elseif ($imc > 40) {
    $verdict = 'Vous êtes en état d\'obésité morbide ou massive';
  }
  echo $verdict;
}

  ?>


</body>
</html>
