<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/header.php");
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/backPageStyle.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/barsStyle.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/pageStyle.css">
    <title>OXYN - Salles</title>
</head>
<body>
    <main>
      <ul class="main-list">
        <li><h1>BARS</h1></li>
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
            include_once($_SERVER['DOCUMENT_ROOT']."/functions/getBars.php");
            $data = getBar();
            if (!empty($data)) {
              $x = 0;
              foreach ($data as $key => $value) {
                  echo "<div id='results".$x."' class='result'>
                          <p onclick='detailAppear(".$x.")'>".$value['bar_name']."</p>
                          <ul>
                            <li><img onclick='suppressAppear(".$value["bar_id"].", \"".$value['bar_name']."\", ".$x.", \"Bar\")' id='trash".$x."' class='cross-detail' src='../../img/delete.png' alt=''></li>
                            <li><img onclick='detailDisappear(".$x.")' id='cross".$x."' class='cross-detail' src='../../img/white-cross.png' alt=''></li>
                          </ul>
                          <img onclick='detailDisappear(".$x.")' id='cross".$x."' class='cross-detail' src='../../img/white-cross.png' alt=''>
                      </div>
                      <div id='details".$x."' class='detail-hidden'>
                          <ul>
                              <li>Nom du gérant: ".$value['bar_gerant']."</li>
                              <li>Email: ".$value['bar_email']."</li>
                              <li>Téléphone: ".$value['bar_phone']."</li>
                              <li>Scène: ".$value['bar_scene']."</li>
                              <li>Type de musique: ".$value['bar_musique']."</li>
                              <li>Matétiel: ".$value['bar_asset']."</li>
                          </ul>
                      </div>";
                  $x++;
              }
            }else {
              echo "<p class='txt-no-content'>Il n'y a aucune salle à afficher pour l'instant.</p>";
            }

        ?>
    </section>

    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/footer.php");
    ?>
    <script type="text/javascript" src="<?php echo $link ?>/js/pageBack.js"></script>

</body>
</html>
