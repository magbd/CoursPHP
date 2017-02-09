<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Les tableaux PHP</title>
</head>
<body>

  <h2>Exercices 1 à 4</h2>
  <!-- Créer un tableau mois et l'initialiser
  Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
  Avec le tableau de l'exercice , afficher la valeur de l'index 5.
  Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant. -->
  <?php
  $mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
  echo $mois[2];
  echo '<br/>';
  echo $mois[5];
  echo '<br/>';
  echo $mois[7];
  $mois[7] = 'Août';
  echo '<br/>';
  echo $mois[7];
  ?>

  <h2>Exercice 5 à 7</h2>
  <!-- Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et
  en valeur leur nom.
  Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
  Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. -->
  <?php
  $hautsDeFrce = array (
    'aisne' => 02,
    'nord' => 59,
    'Oise' => 60,
    'pas-de-calais' => 62,
    'somme' => 80,
  );

  $clé59 = array_search(59, $hautsDeFrce);
  echo $clé59;

  // $hautsDeFrce['Reims'] = 62;  //ajoute une clé/valeur au tableau
  ?>

  <h2>Exercice 8</h2>
  <!-- Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->
  <?php
  foreach ($mois as $valeur){
    echo $valeur.' ';
  }
  ?>

  <h2>Exercice 9 et 10</h2>
  <!-- Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
  Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
  Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le
  numéro" + num_departement -->
  <?php
  foreach ($hautsDeFrce as $key => $value) {
    echo 'département : '.$key.' => indicatif : '.$value.'<br/>';
  };
  ?>
</body>
</html>
