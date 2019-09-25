<?php
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/master.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/404Style.css">
    <title>OXYN - 404</title>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/assets/header.php");
    ?>
  </head>
  <body>
    <main>
      <ul class="main-list">
        <li><h1>OXYN</h1></li>
        <li><h2>Rejoins <strong>la meute</strong></h2></li>
      </ul>
    </main>
    <section>
      <h1>PAGE 404</h1>
      <p>Désolé, impossible de trouver la page demandée. Effectuez une nouvelle recherche ou découvrez de nouveaux artistes !</p>
      <ul class="button-list">
        <li><a href="<?php echo $link ?>">ACCUEIL</a></li>
        <li><a href="<?php echo $link ?>/pages/artistes.php">ARTISTES</a></li>
      </ul>
    </section>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/assets/footer.php");
    ?>

  </body>
</html>
