<?php
if(isset($_POST['valider']) && !empty($_POST['inputLogin']) && !empty($_POST['inputPassword']) ){
  
  $login = htmlspecialchars($_POST['inputLogin']);
  $password = htmlspecialchars($_POST['inputPassword']);

  $expire = 365*24*3600;
  setcookie('login', $login, time()+$expire);
  setcookie('password', $password, time()+$expire);

  header("Location: session-et-cookies.php");
  exit;
}
?>
