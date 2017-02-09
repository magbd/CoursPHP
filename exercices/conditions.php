<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Les conditions</title>
</head>
<body>

  <h2>Exercice 1</h2>
  <!-- Créer une variable age et l'initialiser avec une valeur.
  Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous
  êtes mineur. -->
  <?php
  $age = 32;
  if ($age < 18){
    echo "Vous êtes mineur <br/>";
  }
  else {
    echo "Vous êtes majeur <br/>";
  }
  ?>

  <h2>Exercice 2</h2>
  <!-- Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.
  Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
  Bonus : L'écrire de deux manières différentes. -->
  <?php
  //_____________METHODE 1_____________
  // $isEasy = true;
  // if ($isEasy){
  //   echo 'c\'est facile <br/>';
  // }
  // else {
  //   echo 'c\'est difficile <br/>';
  // }
  //_____________METHODE 2_____________
  if ($isEasy != false){
    echo 'c\'est facile <br/>';
  }
  else {
    echo 'c\'est difficile <br/>';
  }
  ?>

  <h2>Exercice 3</h2>
  <!-- Créer deux variables age et genre. La variable genre peut prendre comme valeur :
  • Homme
  • Femme
  En fonction de l'âge et du genre afficher la phrase correspondante :
  Vous êtes un homme et vous êtes majeur
  Vous êtes un homme et vous êtes mineur
  Vous êtes une femme et vous êtes majeur
  Vous êtes une femme et vous êtes mineur-->

  <?php
  $genre = "femme";
  $age3 = 32;

  if ($genre == "femme" && $age3 < 18){
    echo 'Vous êtes une femme et vous êtes mineur <br/>';
  }
  elseif ($genre == "femme" && $age3 >= 18) {
    echo 'Vous êtes une femme et vous êtes majeur <br/>';
  }
  elseif ($genre == "homme" && $age3 < 18) {
    echo 'Vous êtes un homme et vous êtes mineur <br/>';
  }
  elseif ($genre == "homme" && $age3 >= 18) {
    echo 'Vous êtes un homme et vous êtes majeur  <br/>';
  }
  ?>

  <h2>Exercice 4</h2>
  <!-- L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un
  tremblement de terre. Cette échelle va de 1 à 9.
  Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante. -->
  <?php
  $magnitude = 5;
  switch ($magnitude) {
    case 1:
    echo 'Micro-séisme impossible à ressentir. <br/>';
    break;
    case 2:
    echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres. <br/>';
    break;
    case 3:
    echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti. <br/>';
    break;
    case 4:
    echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats. <br/>';
    break;
    case 5:
    echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des
    bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments
    modernes. <br/>';
    break;
    case 6:
    echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre. <br/>';
    break;
    case 7:
    echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance. <br/>';
    break;
    case 8:
    echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres. <br/>';
    break;
    case 9:
    echo 'Séisme capable de tout détruire sur une très vaste zone. <br/>';
    break;
  }
  ?>

  <h2>Exercice 5</h2>
  <!-- Traduire ce code avec des if et des else :
  echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!'; -->
  <?php
  $maVariable = "femme";
  if ($maVariable != "homme") {
    echo 'C\'est une développeuse <br/>';
  }
  else {
    echo 'C\'est une développeur <br/>';
  }
  ?>

  <h2>Exercice 6</h2>
  <!-- Traduire ce code avec des if et des else :
  echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur'; -->
  <?php
  $monAge = 32;
  if ($monAge >= 18) {
    echo 'Tu es majeur <br/>';
  }
  else {
    echo 'Tu n\'es pas majeur <br/>';
  }
  ?>

  <h2>Exercice 7</h2>
  <!-- Traduire ce code avec des if et des else :
  echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!'; -->
  <?php
  $maVar7 = true;
  if ($maVar7 == false) {
    echo 'c\'est pas bon !!! <br/>';
  }
  else {
    echo 'c\'est ok !! <br/>';
  }
  ?>

  <h2>Exercice 8</h2>
  <!-- Traduire ce code avec des if et des else :
  echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!'; -->
  <?php
  $maVar8 = true;
  if ($maVar8) {
    echo 'c\'est ok !! <br/>';
  }
  else {
    echo 'c\'est pas bon !!! <br/>';
  }
  ?>

</body>
</html>
