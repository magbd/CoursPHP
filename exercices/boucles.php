<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Les Boucles PHP</title>
</head>
<body>

  <h2>Exercice 1</h2>
  <!-- Créer une variable et l'initialiser à 0.
  Tant que cette variable n'atteint pas 10, il faut :
  • l'afficher
  • l'incrementer -->
  <?php
  //_____________version while_____________
  // $compteur = 0;
  // while ($compteur <= 10) {
  //   echo 'Mon compteur vaut : '.$compteur.'<br/>';
  //   $compteur ++;
  // }
  //_____________version for_____________
  for ($i=0; $i <= 10 ; $i++) {
    echo 'Mon compteur vaut : '.$i.'<br/>';
  }
  ?>

  <h2>Exercice 2</h2>
  <!-- Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
  Tant que la première variable n'est pas supérieur à 20 :
  • multiplier la première variable avec la deuxième
  • afficher le résultat
  • incrementer la première variable -->
  <?php
  //_____________version while_____________
  // $var21 = 0;
  // $var22 = 65;
  //
  // while ($var21 < 20) {
  //   $calcul = $var21 * $var22;
  //   echo $calcul.'<br/>';
  //   $var21 ++;
  // }
  //_____________version for_____________
  $var22 = 65;
  for ($var21=0; $var21 < 20 ; $var21++) {
    $calcul = $var21 * $var22;
    echo $calcul.'<br/>';
  }
  ?>

  <h2>Exercice 3</h2>
  <!-- Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
  Tant que la première variable n'est pas inférieur ou égale à 10 :
  • multiplier la première variable avec la deuxième
  • afficher le résultat
  • décrémenter la première variable -->
  <?php
  //_____________version while_____________
  // $var31 = 100;
  // $var32 = 65;
  //
  // while ($var31 >= 10) {
  //   $calcul2 = $var31 * $var32;
  //   echo $calcul2.'<br/>';
  //   $var31 --;
  // }
  //_____________version for_____________
  $var32 = 65;
  for ($var31=100; $var31 >= 10 ; $var31--) {
    $calcul2 = $var31 * $var32;
    echo $calcul2.'<br/>';
  }
  ?>

  <h2>Exercice 4</h2>
  <!-- Créer une variable et l'initialiser à 1.
  Tant que cette variable n'atteint pas 10, il faut :
  • l'afficher
  • l'incrementer de la moitié de sa valeur -->
  <?php
  //_____________version while_____________
  // $var4 = 1;
  // while ($var4 < 10) {
  //   echo 'Ma variable vaut : '.$var4.'<br/>';
  //   $var4 += $var4 / 2;
  // }

  //_____________version for_____________
  for ($var4=1; $var4 < 10 ; $var4 += $var4 / 2) {
    echo 'Ma variable vaut : '.$var4.'<br/>';
  }
  ?>

  <h2>Exercice 5</h2>
  <!-- En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. -->
  <?php
  //_____________version while_____________
  // $var5 = 1;
  // while ($var5 < 15){
  //   echo 'On y arrive presque ';
  //   $var5 ++;
  // }
  //_____________version for_____________
  for ($a=1; $a < 15; $a++) {
    echo 'On y arrive presque <br/>';
  }
  ?>

  <h2>Exercice 6</h2>
  <!-- En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. -->
  <?php
  for ($var6=20; $var6 > 0 ; $var6--) {
    echo 'C\'est presque bon <br/>';
  }
  ?>

  <h2>Exercice 7</h2>
  <!-- En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. -->
  <?php
  for ($var7=1; $var7 < 100; $var7 += 15) {
    echo 'On tient le bon bout <br/>';
  }
  ?>

  <h2>Exercice 8</h2>
  <!-- En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. -->
  <?php
  for ($var8=200; $var8 > 0 ; $var8 -= 12) {
    echo 'Enfin !!!<br/>';
  }
  ?>

</body>
</html>
