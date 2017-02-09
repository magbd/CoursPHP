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
  <p>Timestamp du jour : <?php echo time(); ?></p>

  <!-- Afficher le timestamp du mardi 2 août 2016 à 15h00.  -->

  <!-- mktime($heures, $minutes, $secondes, $mois, $jours, $annees); -->
  <p>Timestamp du mardi 2 août 2016 à 15h00 : <?php echo mktime(15, 0, 0, 8, 2, 2016) ?></p>


  <h2>Exercice 5</h2>
  <!-- Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016. -->
  <p><strong>Methode date_diff() :</strong></p>
  <?php
  $datetime1 = date_create('now');
  $datetime2 = date_create('2016-05-16');
  $interval = date_diff($datetime2, $datetime1);
  echo $interval->format('%R%a days');
  ?>

  <p><strong>Autre méthode (calcul) :</strong></p>
  <?php
  $dateDuJour = date('j-m-Y');
  $dateCompare = "16-05-2016";
  echo 'La date du jour : '.$dateDuJour.'</br>';

  // On transforme les 2 dates en timestamp
  $date1 = strtotime($dateDuJour);
  $date2 = strtotime($dateCompare);

  // On récupère la différence de timestamp entre les 2 précédents
  $nbJoursTimestamp = $date1 - $date2;

  // Pour convertir le timestamp (exprimé en secondes) en jours
  // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
  $nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24

  echo "Nombre de jours depuis le 16 mai 2016 : ".$nbJours;
  ?>


  <h2>Exercice 6</h2>
  <!-- Afficher le nombre de jour dans le mois de février de l'année 2016. -->

  <!-- METHODE cal_days_in_month() -->
  <!-- int cal_days_in_month ( int $calendar , int $month , int $year ) -->

  <?php
  $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
  echo '<p>Il y a '.$number.' jours dans le mois de février 2016</p>';
  ?>


  <h2>Exercice 7</h2>
  <!-- Afficher la date du jour + 20 jours. -->
  <?php
  $plusVingt  = mktime(0, 0, 0, date('m'), date("d")+20, date('Y'));          //timestamp
  $datePlusVingt = date('d / m / Y', $plusVingt);                             //convertit timestamp en date
  echo '<p>Dans 20 jours nous serons le : '.$datePlusVingt.'</p>';
  ?>

  <h2>Exercice 8</h2>
  <!-- Afficher la date du jour - 22 jours -->
  <?php
  $moinsVingtdeux  = mktime(0, 0, 0, date('m'), date("d")-22, date('Y'));     //timestamp
  $dateMoinsVingtdeux = date('d / m / Y', $moinsVingtdeux);                   //convertit timestamp en date
  echo '<p>Il y a 22 jours nous étions le : '.$dateMoinsVingtdeux.'</p>';
  ?>

</body>
</html>
