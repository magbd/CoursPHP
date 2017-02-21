<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <?php

  $salaire = 2000;
  $metier = 'L\'informatique';
  $metierOption = 'est la branche dans laquelle je travaille';
  $moyBac = 11.5;

  echo'<h1 style="text-transform: uppercase; font-weight: bold;">bonjour</h1>
  <p>Le salaire auquel j\'aspire pour bien vivre : <span style="font-weight:bold;">' .$salaire. '</span>€</p>
  <p>La branche dans laquelle je travaille ou souhaiterais travailler : <span style="font-weight:bold;">'.$metier.'</span></p>
  <p>Pour préciser : <span style="font-weight:bold;">'.$metier.' '.$metierOption.'</span></p>
  <p>La note moyenne que j\'ai obtenue au bac : <span style="font-weight:bold;">'.$moyBac.'</span></p>';


  ?>


</body>
</html>
