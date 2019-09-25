<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/functions/getAdmin.php");
  checkUser();
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo $link ?>/js/header.js"></script>
<link rel="stylesheet" href="<?php echo $link ?>/styles/master.css">
<link rel="stylesheet" href="<?php echo $link ?>/styles/headerStyle.css">
<link rel="shortcut icon" href="<?php echo $link ?>/img/simpleLogo.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<header class="day "id="header">
  <a class="oxyn-logo-header" href="<?php echo $link ?>">
    <img src="<?php echo $link ?>/img/simpleLogo.png" alt="">
  </a>
  <a class="oxyn-logo-header-black" href="<?php echo $link ?>">
    <img src="<?php echo $link ?>/img/simpleLogoBlack.png" alt="">
  </a>
  <ul class="header-list">
    <li><a href="<?php echo $link ?>/back/pages/">ACCUEIL</a></li>
    <li><a href="<?php echo $link ?>/back/pages/artiste.php">ARTISTES</a></li>
    <li><a href="<?php echo $link ?>/back/pages/salle.php">SALLES</a></li>
    <li><a href="<?php echo $link ?>/back/pages/sponsor.php">SPONSORS</a></li>
    <li><a href="<?php echo $link ?>/back/pages/actualite.php">ACTUALITES</a></li>
  </ul>
  <ul id="header" class="header-logo-list">
    <li class="item-media">
      <a target="_blank" href="#" class="item-link" rel="nofollow">
        <span>
          <i class="fab fa-facebook"></i>
        </span>
      </a>
    </li>
    <li class="item-media">
      <a target="_blank" href="#" class="item-link" rel="nofollow">
        <span>
          <i class="fab fa-youtube"></i>
        </span>
      </a>
    </li>
    <li class="item-media">
      <a target="_blank" href="#" class="item-link" rel="nofollow">
        <span>
          <i class="fab fa-twitter"></i>
        </span>
      </a>
    </li>
    <li class="item-media">
      <a href="https://www.instagram.com/oxyn_official/" class="item-link" rel="nofollow">
        <span>
          <i class="fab fa-instagram"></i>
        </span>
      </a>
    </li>
  </ul>
</header>
