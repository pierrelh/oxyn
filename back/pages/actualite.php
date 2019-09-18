<?php
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/backPageStyle.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/artistesStyle.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/pageStyle.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/actualiteBack.css">
    <title>OXYN - Actualités</title>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/header.php");
    ?>
</head>
<body>
    <main>
      <ul class="main-list">
        <li><h1>ACTUALITES</h1></li>
        <li><h2>BACK - OFFICE</h2></li>
      </ul>
    </main>
    <section class="print-result">
      <div id='resultsx' class='result'>
        <p onclick='detailAppear("x")'>Créer une news</p>
        <img onclick='detailDisappear("x")' id='crossx' class='cross-detail' src='../../img/white-cross.png' alt=''>
      </div>
      <div id='detailsx' class='detail-hidden'>
        <form class="form-add-article" enctype='multipart/form-data' action="" method="post">
          <div id="subForm">
            <label for="">Titre</label>
            <input type="text" name="articleTitle" value="">
            <br>
            <label for="">Rédacteur</label>
            <input type="text" name="redacteur" value="">
            <br>
            <label for="">Bannière</label>
            <input type="file" name="banniere" value="">
            <br>
            <label for="">Tag</label>
            <select id='tags' class="" name="">
              <option value=""></option>
              <option value="news">NEWS</option>
              <option value="decouvertes">NOS DECOUVERTES</option>
              <option value="interviews">NOS INTERVIEWS</option>
              <option value="evenements">EVENEMENTS A VENIR</option>
            </select>
            <br>
            <label for="">Element</label>
            <select id="element1" onchange="createNewElement(1);" class="" name="">
              <option value=""></option>
              <option value="sous-titre">Sous-Titre</option>
              <option value="image">Image</option>
              <option value="paragraphe">Paragraphe</option>
              <option value="vidéo">Vidéo</option>
            </select>
            <br>
          </div>
          <input type="submit" id='send-button' name="createArticle" value="PUBLIER">
        </form>
      </div>
    </section>
    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/footer.php");
    ?>
    <script type="text/javascript" src="<?php echo $link ?>/js/pageBack.js"></script>
    <script type="text/javascript" src="<?php echo $link ?>/js/back-actualite.js"></script>
</body>
</html>
