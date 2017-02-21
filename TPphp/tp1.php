<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>


  <?php
  TP1
  echo'Merci d\'avoir choisi Vroum-Vroum !
  Choisissez votre carburant :
  Gazole, SuperSP ou GPL ?.<br/>';

  $reponse = 'gazole';

  echo'Vous avez sélectionné : '.$reponse.'<br/>';

  if   ($reponse == 'gazole'){
    echo'Prix du Gazole : 1.35€<br/>';
  }

  elseif ($reponse == 'SuperSP'){
    echo'Prix du  SuperSP : 1.15€<br/>';
  }

  elseif ($reponse == 'GPL'){
    echo'Prix du GPL : 1.00€<br/>';
  }

  elseif ($reponse == ''){
    echo'Veuillez sélectionner un carburant<br/>';
  }
  ?>


</body>
</html>
