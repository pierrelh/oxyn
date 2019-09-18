<?php
  ob_start();

  if (isset($_POST['adminConnect'])) {
    if (isset($_POST['adminLogin']) && $_POST['adminLogin'] !== '' && isset($_POST['adminPassword']) && $_POST['adminPassword'] !== '') {   
      include_once($_SERVER['DOCUMENT_ROOT']."/functions/getAdmin.php");
      adminConnexion();
    }else {
      echo "<p class='error-msg'>Merci de bien vouloir remplir tout les champs.</p>";
    }
  }

  ob_end_flush();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles/backLogForm.css" type="text/css" />
    <title>OXYN - Back-Office</title>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/assets/header.php");
    ?>
  </head>
  <body>
    <main>
      <?php    
          ob_get_contents();
      ?>
      <form class="" method="post">
      <ul class="label-list">
        <li><label class="log" for="admin-login">Nom d'Utilisateur</label></li>
        <li><label class="mdp" for="admin-password">Mot de Passe</label></li>
      </ul>
      <ul class="input-list">
        <li><input id="admin-login" type="text" name="adminLogin" value=""></li>
        <li><input id="admin-password" type="password" name="adminPassword" value=""></li>
      </ul>
        <input class="connexion-button" type="submit" name="adminConnect" value="Connexion">
      </form>
    </main>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/assets/footer.php");
    ?>
  </body>
</html>
