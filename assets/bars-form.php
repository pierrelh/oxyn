<style>
<?php include_once($_SERVER['DOCUMENT_ROOT']."/oxyn/styles/form.css"); ?>
</style>

<section id="sponsors-form" class="formulaire hidden">
  <ul class="form-list">
    <li><h1>FORMULAIRE</h1></li>
    <li><h2>BARS</h2></li>
  </ul>
  <img onclick="sponsorsFormDisappear()" class="cross" src="http://localhost/oxyn/img/cross.png" alt="">

  <form class="" method="post">
    <label for="gerantName">Nom du gérant :</label>
    <br>
    <input id="gerantName" type="text" name="" value="">
    <br>
    <label for="mail">Mail :</label>
    <br>
    <input id="mail" type="email" name="" value="">
    <br>
    <label for="phone">Téléphone :</label>
    <br>
    <input id="phone" type="tel" name="" value="">
    <br>
    <label for="barName">Nom du bar :</label>
    <br>
    <input id="barName" type="text" name="" value="">
    <br>
    <label for="scene">Avez-vous une scène ?</label>
    <br>
    <input id="scene" type="radio" name="scene" value="OUI">
    <input id="scene" type="radio" name="scene" value="NON">
    <br>
    <label for="musicType">Type de musique :</label>
    <br>
    <input id="musicType" type="text" name="" value="">
    <br>
    <label for="materiel">Avez-vous du matériel ?</label>
    <br>
    <input id="materiel" type="radio" name="materiel" value="OUI">
    <input id="materiel" type="radio" name="materiel" value="NON">
    <br>
    <a onclick="confirmFormAppear()" class="send-button">ENVOYER</a>
    <!-- <input onclick="confirmFormAppear()" class="send-button" type="submit" name="" value="ENVOYER"> -->
  </form>


</section>
<section id="sponsors-form-background" class="form-background hidden">
</section>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://localhost/oxyn/js/page.js"></script>
