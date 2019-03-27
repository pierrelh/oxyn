<?php
  define('Home', 'http://localhost/');
?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<style>
<?php include_once($_SERVER['DOCUMENT_ROOT']."/styles/headerStyle.css"); ?>
</style>
<script>
<?php include_once($_SERVER['DOCUMENT_ROOT']."/js/header.js"); ?>
</script>
<link rel="shortcut icon" href="<?php echo Home ?>img/simpleLogo.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<header class="day "id="header">
  <img class="oxyn-logo-header" src="<?php echo Home ?>img/simpleLogo.png" alt="">
  <img class="oxyn-logo-header-black" src="<?php echo Home ?>img/simpleLogoBlack.png" alt="">
  <ul class="header-list">
    <li><a href="<?php echo Home ?>">ACCUEIL</a></li>
    <li><a href="<?php echo Home ?>pages/artistes.php">ARTISTES</a></li>
    <li><a href="<?php echo Home ?>pages/bars.php">BARS</a></li>
    <li><a href="<?php echo Home ?>pages/sponsors.php">SPONSORS</a></li>
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
