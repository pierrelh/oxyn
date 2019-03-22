<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/Oxyn/styles/master.css">
    <link rel="stylesheet" href="http://localhost/Oxyn/styles/artistesStyle.css">
    <link rel="stylesheet" href="http://localhost/Oxyn/styles/pageStyle.css">
    <title></title>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/Oxyn/assets/header.php");
    ?>
  </head>
  <body>
    <main>
      <ul class="main-list">
        <li><h1>ARTISTES</h1></li>
        <li><h2>COMMENT PARTICIPER ?</h2></li>
      </ul>
    </main>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/Oxyn/assets/artistes-form.php");
      include_once($_SERVER['DOCUMENT_ROOT']."/Oxyn/assets/confirm-form.php");
    ?>
    <section class="description">
      <img class="cover-image" src="../img/cover.png" alt="">
      <h3>1. INTRODUCTION</h3>
      <p class="description-h3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <h4>2. DEVENIR ARTISTE</h4>
      <p class="description-h4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <a class="form-button" onclick="sponsorsFormAppear()">FORMULAIRE</a>
    </section>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/Oxyn/assets/footer.php");
    ?>
  </body>
</html>
