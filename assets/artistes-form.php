<style>
<?php include_once($_SERVER['DOCUMENT_ROOT']."/oxyn/styles/form.css"); ?>
</style>
<section id="sponsors-form" class="formulaire hidden">
  <ul class="form-list">
    <li><h1>FORMULAIRE</h1></li>
    <li><h2>ARTISTES</h2></li>
  </ul>
  <img onclick="sponsorsFormDisappear()" class="cross" src="http://localhost/oxyn/img/cross.png" alt="">

  <form class="" method="post">
    <label for="artisteName">Nom du groupe / artiste :</label>
    <br>
    <input id="artisteName" type="text" name="" value="">
    <br>
    <label for="memberNumber">Nombre de membres :</label>
    <br>
    <input id="memberNumber" type="number" name="" value="">
    <br>
    <label for="phone">Téléphone :</label>
    <br>
    <input id="phone" type="tel" name="" value="">
    <br>
    <label for="mail">mail :</label>
    <br>
    <input id="mail" type="email" name="" value="">
    <br>
    <label for="YT">YouTube :</label>
    <br>
    <input id="YT" type="url" name="" value="">
    <br>
    <label for="SC">SoundCloud :</label>
    <br>
    <input id="SC" type="url" name="" value="">
    <br>
    <label for="demo">Démo :</label>
    <br>
    <input id="demo" type="file" name="" value="">
    <br>
    <label for="musicType">Type de musique :</label>
    <br>
    <input id="musicType" type="text" name="" value="">
    <br>
    <label for="adress">Adresse :</label>
    <br>
    <input id="adress" type="text" name="" value="">
    <br>
    <a onclick="confirmFormAppear()" class="send-button">ENVOYER</a>
    <!-- <input onclick="confirmFormAppear()" class="send-button" type="submit" name="" value="ENVOYER"> -->
  </form>


</section>
<section id="sponsors-form-background" class="form-background hidden">
</section>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://localhost/oxyn/js/page.js"></script>
