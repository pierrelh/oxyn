<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/header.php");
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/backPageStyle.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/artistesStyle.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/pageStyle.css">
    <title>OXYN - Artistes</title>
</head>
<body>
    <main>
      <ul class="main-list">
        <li><h1>ARTISTES</h1></li>
        <li><h2>BACK - OFFICE</h2></li>
      </ul>
    </main>
    <section class="print-result">
      <div id="backgroundSuppress" class="background-suppress"></div>
      <div class="suppress-confirm" id="supressConfirm">
        <p id="groupeName"></p>
        <ul>
          <li><a id="suppressYes">OUI</a></li>
          <li><a onclick="suppressDisappear()" id="suppressNo">NON</a></li>
        </ul>
      </div>
        <?php
            include_once($_SERVER['DOCUMENT_ROOT']."/functions/getArtists.php");
            $data = getArtist();
            if (!empty($data)) {
              $x = 0;
              foreach ($data as $key => $value) {
                  echo "<div id='results".$x."' class='result'>
                          <p onclick='detailAppear(".$x.")'>".$value['artist_name']."</p>
                          <ul>
                            <li><img onclick='suppressAppear(".$value["artist_id"].", \"".$value['artist_name']."\", ".$x.", \"Artist\")' id='trash".$x."' class='cross-detail' src='../../img/delete.png' alt=''></li>
                            <li><img onclick='detailDisappear(".$x.")' id='cross".$x."' class='cross-detail' src='../../img/white-cross.png' alt=''></li>
                          </ul>
                      </div>
                      <div id='details".$x."' class='detail-hidden'>
                      <ul>
                          <li>Style de musique: ".$value["artist_type"]."</li>
                          <li>Nombre de membre(s): ".$value["artist_number"]."</li>
                          <li>Téléphone: ".$value["artist_phone"]."</li>
                          <li>Email: ".$value["artist_email"]."</li>
                          <li>YouTube: ".$value["artist_youtube"]."</li>
                          <li>SoundCloud: ".$value["artist_soundcloud"]."</li>
                          <li>Adresse: ".$value["artist_adress"]."</li>
                          <li>Démo:";
                          if ($value["artist_demo"] != "false") {
                            echo "<audio controls src=".$value["artist_demo"]."></audio></li>";
                          }else {
                            echo " Non renseigné</li>";
                          }
                          echo"
                      </ul>
                  </div>";
                  $x++;
              }
            }else {
              echo "<p class='txt-no-content'>Il n'y a aucun sponsor à afficher pour l'instant.</p>";
            }

        ?>
    </section>
    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/footer.php");
    ?>
    <script type="text/javascript" src="<?php echo $link ?>/js/pageBack.js"></script>
</body>
</html>
