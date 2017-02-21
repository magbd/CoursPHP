<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Les variables en PHP</title>
</head>
<body>

<h2>Exercice 1 2 et 7</h2>
<!-- Créer une variable nom et l'initialiser avec la valeur de votre choix. Afficher son contenu. -->

<!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix.
Attention age est de type entier. Afficher leur contenu. -->

<!-- Créer trois variables nom , prenom et age et les initialiser avec les valeurs de votre choix.
Attention age est de type entier.
Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans" -->

<?php
$nom = 'Baude';
$prenom ='Magali';
$age = 33;
echo 'Je m\'appelle '.$nom.' '.$prenom.' et j\'ai '.$age.' ans.<br/>';
?>

<h2>Exercice 3</h2>
<!-- Créer une variable km. L'initialiser à 1. Afficher son contenu.
Changer sa valeur par 3. Afficher son contenu.
Changer sa valeur par 125. Afficher son contenu. -->
<?php
$km = 1;
echo $km.'<br/>';
$km = 3;
echo $km.'<br/>';
$km = 125;
echo $km.'<br/>';
?>

<h2>Exercice 4</h2>
<!-- Créer une variable de type string, une variable de type int, une variable de type float, une variable
de type booléan et les initialiser avec une valeur de votre choix.
Les afficher. -->
<?php
$string = 'je suis une sting';
$int = 15;
$booleen = true;
echo $string.'<br/>';
echo $int.'<br/>';
echo $booleen.'<br/>';
?>

<h2>Exercice 5</h2>
<!-- Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
Donner une valeur à cette variable et l'afficher. -->
<?php
$test;
echo $test;
$test = 12;
echo '<br/>'.$test;
?>

<h2>Exercice 8</h2>
<!-- Créer 3 variables.
Dans la première mettre le résultat de l'opération 3 + 4.
Dans la deuxième mettre le résultat de l'opération 5 * 20.
Dans la troisième mettre le résultat de l'opération 45 / 5.
Afficher le contenu des variables. -->
<?php
$var1 = 3+4;
$var2 = 5*20;
$var3 = 45/5;
echo '<br/>'.$var1;
echo '<br/>'.$var2;
echo '<br/>'.$var3;
 ?>

</body>
</html>
