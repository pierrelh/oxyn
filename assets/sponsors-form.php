<style>
<?php include_once($_SERVER['DOCUMENT_ROOT']."/oxyn/styles/form.css"); ?>
</style>
<section id="sponsors-form" class="formulaire hidden">
  <ul class="form-list">
    <li><h1>FORMULAIRE</h1></li>
    <li><h2>SPONSORS</h2></li>
  </ul>
  <img onclick="sponsorsFormDisappear()" class="cross" src="http://localhost/oxyn/img/cross.png" alt="">

  <form class="" method="post">
    <label for="brandName">Nom de la marque :</label>
    <br>
    <input id="brandName" type="text" name="" value="">
    <br>
    <label for="mail">Mail :</label>
    <br>
    <input id="mail" type="email" name="" value="">
    <br>
    <label for="phone">Téléphone :</label>
    <br>
    <input id="phone" type="tel" name="" value="">
    <br>
    <label for="motivation">Motivation* :</label>
    <br>
    <textarea id="motivation" name="name" rows="8" cols="80"></textarea>
    <p>*Merci de préciser la raison de votre démarche ainsi que d'éventuelles question.</p>
    <a onclick="confirmFormAppear()" class="send-button">ENVOYER</a>
    <!-- <input onclick="confirmFormAppear()" class="send-button" type="submit" name="" value="ENVOYER"> -->
  </form>


</section>
<section id="sponsors-form-background" class="form-background hidden">
</section>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://localhost/oxyn/js/page.js"></script>
