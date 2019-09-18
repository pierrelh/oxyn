<?php
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<link rel="stylesheet" href="<?php echo $link ?>/styles/form.css">
<section id="sponsors-form" class="formulaire hidden">
  <ul class="form-list">
    <li><h1>FORMULAIRE</h1></li>
    <li><h2>SPONSORS</h2></li>
    <li><h3 id="titre-form"></h3></li>
  </ul>
  <img onclick="sponsorsFormDisappear()" class="cross" src="../img/cross.png" alt="">

  <form class="" method="post">
    <label for="brandName">Nom de la marque :</label>
    <br>
    <input id="brandName" type="text" name="sponsor-name" value="">
    <br>
    <label for="mail">Mail :</label>
    <br>
    <input id="mail" type="email" name="sponsor-mail" value="">
    <br>
    <label for="phone">Téléphone :</label>
    <br>
    <input id="phone" type="tel" name="sponsor-phone" value="">
    <br>
    <label for="motivation">Motivation* :</label>
    <br>
    <textarea id="motivation" name="sponsor-message" rows="8" cols="80"></textarea>
    <p>*Merci de préciser la raison de votre démarche ainsi que d'éventuelles question.</p>
    <a onclick="sendSponsorInfos()" class="send-button">ENVOYER</a>
  </form>


</section>
<section id="sponsors-form-background" class="form-background hidden">
</section>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo $link ?>/js/page.js"></script>
