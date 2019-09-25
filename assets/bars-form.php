<?php
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<link rel="stylesheet" href="<?php echo $link ?>/styles/form.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<section id="sponsors-form" class="formulaire hidden">
  <ul class="form-list">
    <li><h1>FORMULAIRE</h1></li>
    <li><h2>BARS</h2></li>
    <li><h3 id="titre-form"></h3></li>
  </ul>
  <img onclick="sponsorsFormDisappear()" class="cross" src="../img/cross.png" alt="">

  <form class="" method="post">
    <label for="gerantName">Nom du gérant :</label>
    <br>
    <input id="gerantName" type="text" name="bar-gerant" value="">
    <br>
    <label for="mail">Mail :</label>
    <br>
    <input id="mail" type="email" name="bar-email" value="">
    <br>
    <label for="phone">Téléphone :</label>
    <br>
    <input id="phone" type="tel" name="bar-phone" value="">
    <br>
    <label for="barName">Nom du bar :</label>
    <br>
    <input id="barName" type="text" name="bar-name" value="">
    <br>
    <label for="scene">Avez-vous une scène ?</label>
    <br>
    <ul class="radio-button-label">
      <li><label for="sceneTrue">Oui</label></li>
      <li><label for="sceneFalse">Non</label></li>
    </ul>
    <ul class="radio-button-list">
      <li><input id="sceneTrue" type="radio" name="bar-scene" value="oui"></li>
      <li><input id="sceneFalse" type="radio" name="bar-scene" value="non"></li>
    </ul>
    <br>
    <label for="musicType">Type de musique :</label>
    <br>
    <input id="musicType" type="text" name="bar-music" value="">
    <br>
    <label for="materiel">Avez-vous du matériel ?</label>
    <br>
    <ul class="radio-button-label">
      <li><label for="materielTrue">Oui</label></li>
      <li><label for="materielFalse">Non</label></li>
    </ul>
    <ul class="radio-button-list">
      <li><input id="materielTrue" type="radio" name="bar-assets" value="oui"></li>
      <li><input id="materielFalse" type="radio" name="bar-assets" value="non"></li>
    </ul>
    <br>
    <a onclick="sendBarInfos()" class="send-button">ENVOYER</a>
  </form>


</section>
<section id="sponsors-form-background" class="form-background hidden">
</section>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo $link ?>/js/page.js"></script>
