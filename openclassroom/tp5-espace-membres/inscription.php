<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page inscription</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>



  <form action="inscription.php" method="post">
    <h2>Inscription</h2>

    <label for="pseudo">Pseudo</label>
    <input class="pseudo" type="text" name="pseudo">

    <label for="password">Mot de passe</label>
    <input class="password" type="password" name="password">

    <label for="confPassword">Confirmation du mot de passe</label>
    <input class="confPassword" type="password" name="confPassword">

    <label for="mail">Email</label>
    <input class="mail" type="text" name="mail">

    <input class="button" type="submit" name="valider" value="Envoyer">
  </form>

</body>
</html>
