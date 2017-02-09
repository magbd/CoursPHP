<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Les dates PHP</title>
</head>
<body>

  <h2>Exercice 1</h2>
  <!-- Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016) -->
  <p>La date du jour : <?php echo date('j / m / Y');?></p>


  <h2>Exercice 2</h2>
  <!-- Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16) -->
  <p>La date du jour : <?php echo date('j-m-y');?></p>


  <h2>Exercice 3</h2>
  <!-- Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
  Bonus : Le faire en français. -->
  <?php
  // date_default_timezone_set('Europe/Paris');

  // --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
  setlocale(LC_TIME, 'fr_FR.utf8','fra');
  // strftime("jourEnLettres jour moisEnLettres annee") de la date courante
  echo "Date du jour : ", strftime("%A %d %B %Y");
  ?>


  <h2>Exercice 4</h2>
  <!-- Afficher le timestamp du jour.-->
  <p>Timestamp du jour : <?php  ?></p>

  <!-- Afficher le timestamp du mardi 2 août 2016 à 15h00.  -->
  <p>Timestamp du mardi 2 août 2016 à 15h00 : <?php  ?></p>


</body>
</html>
