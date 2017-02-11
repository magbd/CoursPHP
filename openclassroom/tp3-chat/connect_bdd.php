<?php

////////////////////////////////////////////////
//VARIABLES A CHANGER POUR CONNECTION BDD
////////////////////////////////////////////////

$host = 'localhost';
$dbname = 'miniChat';
$id = 'root';
$password = 'upto34';

////////////////////////////////////////////////

function connectPDOMysql($parm1, $param2, $param3, $param4)
  {
    // return une instance PDO
    return new PDO('mysql:host='.$param1.';dbname='.$param2, $param3, $param4, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // return new PDO('mysql:host=localhost;dbname=miniChat', 'root', 'upto34', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  }

  // appel de la fonction avec paramètres
  //crée variable $bdd = new PDO...
  $bdd = connectPDOMysql($host, $dbname, $id, $password);
  ?>
