<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>seconde page session</title>
</head>
<body>

  <p>Bonjour <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?>, je me souviens de toi grâce à la SESSION !</p>
  <p>Tu as <?php echo $_SESSION['age']; ?> ans.</p>

</body>
</html>
