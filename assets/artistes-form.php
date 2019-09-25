<?php
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<link rel="stylesheet" href="<?php echo $link ?>/styles/form.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<section id="sponsors-form" class="formulaire hidden">
  <ul class="form-list">
    <li><h1>FORMULAIRE</h1></li>
    <li><h2>ARTISTES</h2></li>
    <li><h3 id="titre-form"></h3></li>
  </ul>
  <img onclick="sponsorsFormDisappear()" class="cross" src="../img/cross.png" alt="">

  <form id="form-artist" class="" enctype="multipart/form-data" method="post">
    <label for="artistName">Nom du groupe / artiste :</label>
    <br>
    <input id="artistName" type="text" name="artist-name" value="">
    <br>
    <label for="memberNumber">Nombre de membres :</label>
    <br>
    <input id="memberNumber" type="number" name="members" value="">
    <br>
    <label for="phone">Téléphone :</label>
    <br>
    <input id="phone" type="tel" name="artist-phone" value="">
    <br>
    <label for="mail">Mail :</label>
    <br>
    <input id="mail" type="email" name="artist-mail" value="">
    <br>
    <label for="youtube">YouTube :</label>
    <br>
    <input id="youtube" type="url" name="yt" value="">
    <br>
    <label for="soundcloud">SoundCloud :</label>
    <br>
    <input id="soundcloud" type="url" name="sc" value="">
    <br>
    <label for="demo">Démo :</label>
    <br>
    <input id="file" type="file" name="file">
    <br>
    <label for="musicType">Type de musique :</label>
    <br>
    <input id="musicType" type="text" name="music-type" value="">
    <br>
    <label for="adress">Adresse :</label>
    <br>
    <input id="adress" type="text" name="artist-adress" value="">
    <br>
    <div class="progress-bar">
      <div id="myBarPlus" class="bar positive">
        <span id="sendButton">ENVOYER</span>
      </div>
      <div id="myBarMoins" class="bar negative">
        <span onclick="sendArtistInfos()" id="barSpan2">ENVOYER</span>
      </div>
    </div>
    <!-- <a onclick="sendArtistInfos()" id="sendButton" class="send-button">ENVOYER</a> -->
  </form>


</section>
<section id="sponsors-form-background" class="form-background hidden">
</section>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo $link ?>/js/page.js"></script>
