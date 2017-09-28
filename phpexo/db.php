<?php
    $dbServer = "localhost";
     $dbUser = "root";
     $dbPassword = "SV07101999";
      $dbName = "bdd_begin";
    $bdd = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName);
    if($bdd = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName)) {} else echo '<pre>Erreur de connexion</pre>';
?>
