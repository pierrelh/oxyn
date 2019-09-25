<?php
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<link rel="stylesheet" href="<?php echo $link ?>/styles/footerStyle.css">
<footer>
  <img class="footer-logo" src="<?php echo $link ?>/img/simpleLogo.png" alt="">
  <ul class="div-list-footer">
    <li>
      <div class="footer-div">
        <ul class="logo-list-footer">
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
            <a href="#" class="item-link" rel="nofollow">
              <span>
                <i class="fab fa-instagram"></i>
              </span>
            </a>
          </li>
        </ul>
        <a class="contact-button-footer" href="<?php echo $link ?>/pages/nous-contacter.php">NOUS CONTACTER</a>
      </div>
    </li>
    <li>
      <div class="footer-div footer-right">
        <h4>A PROPOS:</h4>
        <ul>
          <li><a href="<?php echo $link ?>/pages/politique-de-confidentialite.php">POLITIQUE DE CONFIDENTIALITE</a></li>
          <li><a href="<?php echo $link ?>/pages/mentions-legales.php">MENTIONS LEGALES</a></li>
          <li><a href="<?php echo $link ?>/pages/cgu.php">CGU</a></li>
        </ul>
      </div>
    </li>
  </ul>
</footer>
