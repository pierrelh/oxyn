<?php
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/master.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/screen/indexStyle.css">
    <title>OXYN</title>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/assets/header.php");
    ?>
  </head>
  <body>
    <main>
      <video class="video-background" loop muted autoplay>
        <source src="<?php echo $link ?>/video/sample<?php echo rand(1, 4) ?>.mp4" type="video/mp4" />
      </video>
      <ul class="main-list">
        <li><h1>OXYN</h1></li>
        <li><h2>Rejoins <strong>la meute</strong></h2></li>
        <li><h3>Participe à la <strong>saison 1 !</strong></h3></li>
        <li class="button-postuler"><a href="#">POSTULER</a></li>
      </ul>
    </main>
    <div class="section-index appear">
      <section id="presentation">
        <ul class="div-list-presentation">
          <li>
            <div class="txt-div div-one-presentation">
              <ul class="txt-list right-list">
                <li><h4>QU'EST-CE QU'OXYN ?</h4></li>
                <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
                <li class="btn-presentation"><a href="<?php echo $link ?>/pages/oxyn.php">EN SAVOIR PLUS</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="img-div div-two-presentation">
              <img class="presentation-img" src="<?php echo $link ?>/img/presentation.png" alt="">
            </div>
          </li>
        </ul>
      </section>
      <section class="section-left" id="artistes">
        <ul class="div-list-presentation">
          <li>
            <div class="img-div div-one-artiste">

            </div>
          </li>
          <li>
            <div class="txt-div div-two-artiste">
              <ul class="txt-list left-list">
                <li><h4>ARTISTES</h4></li>
                <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
                <li class="btn-presentation"><a href="<?php echo $link ?>/pages/artistes.php">EN SAVOIR PLUS</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </section>
      <section class="section-right" id="bars">
        <ul class="div-list-presentation">
          <li>
            <div class="txt-div div-one-bars">
              <ul class="txt-list right-list">
                <li><h4>BARS</h4></li>
                <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
                <li class="btn-presentation"><a href="<?php echo $link ?>/pages/bars.php">EN SAVOIR PLUS</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="img-div div-two-bars">
            </div>
          </li>
        </ul>
      </section>
      <section class="section-left" id="sponsors">
        <ul class="div-list-presentation">
          <li>
            <div class="img-div div-one-sponsors">

            </div>
          </li>
          <li>
            <div class="txt-div div-two-sponsors">
              <ul class="txt-list left-list">
                <li><h4>SPONSORS</h4></li>
                <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
                <li class="btn-presentation"><a href="<?php echo $link ?>/pages/sponsors.php">EN SAVOIR PLUS</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </section>
      <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/assets/footer.php");
      ?>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $link ?>/js/index.js"></script>
  </body>
</html>
