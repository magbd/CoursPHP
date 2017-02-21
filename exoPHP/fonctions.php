<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Les fonctions PHP</title>
</head>
<body>

  <h2>Exercice 1</h2>
  <!-- Faire une fonction qui retourne true. -->
  <?php
  function test($booleen){
    echo $booleen;
  }
  test(true);
  ?>

  <h2>Exercice 2</h2>
  <!-- Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même
  chaine. -->
  <?php
  function exercice2($string){
    echo $string;
  }
  exercice2('Magali');
  ?>

  <h2>Exercice 3</h2>
  <!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation
  de ces deux chaines -->
  <?php
  function exercice3($param1, $param2){
    echo $param1.' '.$param2;
  }
  exercice3('Magali', 'Baude')
  ?>

  <h2>Exercice 4</h2>
  <!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
  • Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
  • Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
  • Les deux nombres sont identiques si les deux nombres sont égaux -->
  <?php
  function exercice4($a, $b){
    if ($a > $b) {
      echo 'le premier nombre est plus grand que le deuxième';
    }
    elseif ($a < $b) {
      echo 'le premier nombre est plus petit que le deuxième';
    }
    else {
      echo 'les deux nombres sont égaux';
    }
  }
  exercice4(20, 6);
  ?>

  <h2>Exercice 5</h2>
  <!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la
  concaténation de ces deux paramètres. -->
  <?php
  function exercice5($x, $y){
    echo $x.' '.$y;
  }
  exercice5('âge', 32);
  ?>

  <h2>Exercice 6</h2>
  <!-- Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine
  de la forme :
  "Bonjour" + nom + prenom + ",tu as" + age + "ans". -->
  <?php
  function exercice6($nom, $prenom, $age){
    echo 'Bonjour '.$nom.' '.$prenom.' , tu as '.$age.' ans.';
  }
  exercice6('Baude', 'Magali', 32);
  ?>

  <h2>Exercice 7</h2>
  <!-- Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre
  comme valeur :
  • Homme
  • Femme
  La fonction doit renvoyer en fonction des paramètres :
  • Vous êtes un homme et vous êtes majeur
  • Vous êtes un homme et vous êtes mineur
  • Vous êtes une femme et vous êtes majeur• Vous êtes une femme et vous êtes mineur -->
  <?php
  function exercice7($varAge, $varGenre){
    if ($varGenre == 'femme' && $varAge < 18){
      echo 'Vous êtes une femme et vous êtes mineur <br/>';
    }
    elseif ($varGenre == 'femme' && $varAge >= 18) {
      echo 'Vous êtes une femme et vous êtes majeur <br/>';
    }
    elseif ($varGenre == 'homme' && $varAge < 18) {
      echo 'Vous êtes un homme et vous êtes mineur <br/>';
    }
    elseif ($varGenre == 'homme' && $varAge >= 18) {
      echo 'Vous êtes un homme et vous êtes majeur  <br/>';
    }
  }
  exercice7(32, 'femme');
  ?>

  <h2>Exercice 8</h2>
  <!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
  Tous les paramètres doivent avoir une valeur par défaut. -->
  <?php
    function somme($n1, $n2, $n3){
      $n = $n1 + $n2 + $n3;
      echo 'La somme des nombres est de : '.$n;
    }
    somme(8, 96, 34);
  ?>
</body>
</html>
