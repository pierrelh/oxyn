<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/styles/master.css"); ?>
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/styles/actualiteStyle.css"); ?>
    </style>
    <title></title>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/assets/header.php");
    ?>
  </head>
  <body>
    <main>
      <ul class="main-news">
        <li><h1>RETOUR SUR LE CONCERT AU SUPERSONIC !</h1></li>
        <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
        <li class="button-main-news"><a href="#">LIRE L'ARTICLE</a></li>
      </ul>
    </main>
    <section class="description">
      <section class="detail-news">
        <ul class="detail-buttons">
          <li><a href="#">NEWS</a></li>
          <li><a class="arrow-button" href="#"></a></li>
        </ul>
        <ul class="news">
          <li class="first-news"><a href="#">RETOUR SUR LA SOIREE AU DAMPIERRE</a></li>
          <li class="second-news"><a href="#">UNE NOUVELLE COLLABORATION CHEZ OXYN</a></li>
          <li class="third-news"><a href="#">LE NOUVEL ALBUM DE FLUME</a></li>
        </ul>
      </section>
<!--
      <section class="detail-news">
      </section>

      <section class="detail-news">
      </section>

      <section class="detail-news">
      </section> -->

    </section>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/assets/footer.php");
    ?>
  </body>
</html>
