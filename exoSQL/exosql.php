<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exo SQL</title>
</head>
<body>

  <?php
  //connexion à la base
  $bdd = new PDO('mysql:host=localhost;dbname=exosql;charset=utf8', 'root', 'upto34', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  ?>


  <h2>Les prénoms et noms de chaque acteur :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT nom, prenom FROM acteurs');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['prenom'] . ' ' . $donnees['nom'] ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les acteurs dont le code est smcqueen :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT nom, prenom, codeacteur FROM acteurs WHERE codeacteur = "smcqueen"');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['prenom'] . ' ' . $donnees['nom'] ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les acteurs nés en 1960 ou après :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT nom, prenom, birth FROM acteurs WHERE birth >= "1960-01-01"');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['prenom'] . ' ' . $donnees['nom'] ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les codevedette présents dans les films, sans doublon :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    // $reponse = $bdd->query('SELECT codevedette, COUNT(codevedette) FROM films GROUP BY codevedette HAVING COUNT(codevedette) = 1 ');
    $reponse = $bdd->query('SELECT codevedette FROM films GROUP BY codevedette');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['codevedette']; ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les titres des films avec Tom Hanks et antérieurs à 1995 :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT titre, annee, codevedette FROM films WHERE codevedette = "thanks" && annee < 1995');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['titre']; ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les titres des films avec Tom Hanks ou Johnny Depp :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT titre, codevedette FROM films WHERE codevedette = "thanks" OR codevedette = "jdepp"');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['titre']; ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les prénoms et noms des acteurs dont le prénom commence par la lettre S :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT nom, prenom FROM acteurs WHERE prenom REGEXP "^S"');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['prenom'] . ' ' . $donnees['nom']; ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les prénoms et noms des acteurs dont le nom contient la séquence mit :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT nom, prenom FROM acteurs WHERE nom REGEXP "mit"');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['prenom'] . ' ' . $donnees['nom']; ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les prénoms et noms des acteurs dont le nom est composé d'exactement cinq lettres :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT nom, prenom FROM acteurs WHERE nom REGEXP "^[a-z]{5}$"');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['prenom'] . ' ' . $donnees['nom']; ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les acteurs par ordre alphabétique :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT nom, prenom FROM acteurs ORDER BY nom ASC');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['nom'] . ' ' . $donnees['prenom']; ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les acteurs par ordre alphabétique inverse :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT nom, prenom FROM acteurs ORDER BY nom DESC');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['nom'] . ' ' . $donnees['prenom']; ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les acteurs du plus jeune au plus vieux :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT nom, prenom, birth FROM acteurs ORDER BY birth DESC');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['prenom'] . ' ' . $donnees['nom'] . ' : ' . $donnees['birth']; ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Les acteurs du plus vieux au plus jeune :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT nom, prenom, birth FROM acteurs ORDER BY birth ASC');
    // boucle qui affiche les champs sélectionnés dans la base
    while ($donnees = $reponse->fetch()){
      ?>
      <li><?php echo $donnees['prenom'] . ' ' . $donnees['nom'] . ' : ' . $donnees['birth']; ?></li>
      <?php
    }
    ?>
  </ul>


  <h2>Le nombre d'acteurs :</h2>
  <?php
  //requête des données à récupérer
  $reponse = $bdd->query('SELECT COUNT(codeacteur) AS nbCodeacteur FROM acteurs');
  // boucle qui affiche les champs sélectionnés dans la base
  while ($donnees = $reponse->fetch()){
    ?>
    <p><?php echo 'La base acteur contient : ' . $donnees['nbCodeacteur'] . ' acteurs.' ; ?></p>
    <?php
  }
  ?>



  <h2>Le nombre d'acteurs dont le prénom commence par la lettre S :</h2>
  <?php
  //requête des données à récupérer
  $reponse = $bdd->query('SELECT COUNT(prenom) AS nbPrenomS FROM acteurs WHERE prenom REGEXP "^S"');
  // boucle qui affiche les champs sélectionnés dans la base
  while ($donnees = $reponse->fetch()){
    ?>
    <p><?php echo 'Nombre d\'acteurs dont le prénom commence par S : ' . $donnees['nbPrenomS'] . ' acteurs.' ; ?></p>
    <?php
  }
  ?>


  <h2>Pour chaque film, qui en est l'acteur :</h2>
  <ul>
    <?php
    //requête des données à récupérer
    $reponse = $bdd->query('SELECT acteurs.prenom, acteurs.nom, films.titre

                            FROM acteurs

                            INNER JOIN films

                            ON acteurs.codeacteur = films.codevedette');
      // boucle qui affiche les champs sélectionnés dans la base
      while ($donnees = $reponse->fetch()){
        ?>
        <li><?php echo $donnees['titre'] . ' : ' . $donnees['prenom'] . ' ' . $donnees['nom'] ; ?></li>
        <?php
      }
      ?>
    </ul>


    <h2>Les prénom et nom de l'acteur du film dont le code est sh1999 :</h2>
      <?php
      //requête des données à récupérer
      $reponse = $bdd->query('SELECT acteurs.prenom, acteurs.nom, films.codefilm, films.titre

                              FROM acteurs

                              INNER JOIN films

                              ON acteurs.codeacteur = films.codevedette

                              WHERE films.codefilm = "sh1999"');
        // boucle qui affiche les champs sélectionnés dans la base
        while ($donnees = $reponse->fetch()){
          ?>
          <p><?php echo 'Le code film sh1999 correspond à  : ' . $donnees['prenom'] . ' ' . $donnees['nom'] . ' dans ' .$donnees['titre']; ?></p>
          <?php
        }
        ?>


    <h2>Pour chaque code d'acteur, le nombre de films dans lesquels il est la vedette :</h2>
    <ul>
      <?php
      //requête des données à récupérer
      $reponse = $bdd->query('SELECT acteurs.codeacteur, COUNT(films.codevedette) AS nb

                              FROM acteurs

                              INNER JOIN films

                              ON acteurs.codeacteur = films.codevedette

                              GROUP BY films.codevedette');
        // boucle qui affiche les champs sélectionnés dans la base
        while ($donnees = $reponse->fetch()){
          ?>
          <li><?php echo $donnees['codeacteur'] . ' ' . ' a joué dans : ' . $donnees['nb'] . ' films'; ?></li>
          <?php
          }
          ?>
        </ul>


  </body>
  </html>
