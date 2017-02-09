<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TP 6</title>
</head>
<body>

  <h1>Pour vous abonner :</h1>

  <form action="tp6.php" method="post">
    Veuillez saisir vos données d'identité :
    <input type="radio" name="civilite" value="MLLE">Mademoiselle
    <input type="radio" name="civilite" value="MME">Madame
    <input type="radio" name="civilite" value="M">Monsieur
    <br>
    Nom : <input type="text" name="nom">
    <br>
    Prenom : <input type="text" name="prenom">
    <br>
    Age : <input type="text" name="age">
    <br>
    Adresse : <input type="text" name="adresse">
    <br>
    Code postal : <input type="text" name="cp" maxlength="5">
    <br>
    Ville : <input type="text" name="ville">
    <br>
    Téléphone : <input type="tel" name="telephone" maxlength="10">
    <br>
    Veuillez cocher le magazine choisi :
    <br>
    <input type="radio" name="magazine" value="main">J'ai la main verte
    <br>
    <input type="radio" name="magazine" value="pied">J'ai le pied marin
    <br>
    <input type="radio" name="magazine" value="oeil">J'ai l'oeil vif
    <br>
    <input type="radio" name="magazine" value="rate">J'ai la rate qui se dilate
    <br>
    <input type="submit" name="valider" value="Envoyer">
  </form>

<?php
// Connexion à la base SQL :
function connectMaBase(){
    // prépare la commande sql en la stockant dans une variable
    $base = mysqli_connect("localhost", "root", "upto34", "maBase");
    // lance la commande de sélection de la base
    mysqli_select_db($base, "maBase") ;
    return $base;
}

if(isset($_POST['valider'])){
//On récupère les valeurs entrées par l'utilisateur :
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$telephone = $_POST['telephone'];
$magazine = $_POST['magazine'];
//On créée une variable date du jour grâce à la fonction date() de PHP
$today = date("d.m.y");

///////////////////////////////////////////////////////////////////////
echo 'Vous vous appelez :'.$nom.' '.$prenom.'<br/>';

///////////////////////////////////////////////////////////////////////

$bdd = connectMaBase();

//On prépare la commande sql d'insertion
$sql = 'INSERT INTO abonnements VALUES(DEFAULT,"'.$civilite.'","'.$nom.'","'.$prenom.'","'.$age.'","'.$adresse.'","'.$cp.'","'.$ville.'","'.$telephone.'","'.$magazine.'","'.$today.'")';
echo $sql.'<br/>';

/*on lance la commande (mysql_query) et au cas où,
on rédige un petit message d'erreur si la requête ne passe pas (or die)
(Message qui intègrera les causes d'erreur sql)*/
// mysqli_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
mysqli_query ($bdd, $sql); //requête envoi dans bdd le resultat de sql

// on ferme la connexion
mysqli_close($bdd);
}
$bdd = connectMaBase();
echo'Se trouve déjà dans ma base : <br/>';

 $resultat = mysqli_query ($bdd, 'SELECT * FROM abonnements');
 var_dump($resultat);
 $resultat->fetch_array();

 mysqli_close($bdd);

 ?>

</body>
</html>
