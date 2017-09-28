<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo php</title>
  </head>
  <body>
    <form class="content" action="traiment.php" method="post" enctype="multipart/form-data">
          <input type="text" name="name" value="" placeholder="Nom"><br><br>
          <input type="text" name="first_name" value="" placeholder="prenom"><br><br>
          <input type="mail" name="mail" value="" placeholder="adresse e-mail"><br><br>
          <input type="text" name="user" value="" placeholder="user"><br><br>
          <input type="password" name="motdepass" value="" placeholder="motdepass"><br><br>
          <button type="submit" name="button">Envoyer</button>
      </form>
  </body>
</html>

  <input type="text" name="user" value="" placeholder="user"><br><br>
  <input type="password" name="motdepass" value="" placeholder="motdepass"><br><br>
