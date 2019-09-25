<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/header.php");
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/backPageStyle.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/sponsorsStyle.css">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/pageStyle.css">
    <title>OXYN - Sponsors</title>
</head>
<body>
    <main>
      <ul class="main-list">
        <li><h1>SPONSORS</h1></li>
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
            include_once($_SERVER['DOCUMENT_ROOT']."/functions/getSponsors.php");
            $data = getSponsor();
            if (!empty($data)) {
              $x = 0;
              foreach ($data as $key => $value) {
                  echo "<div id='results".$x."' class='result'>
                          <p onclick='detailAppear(".$x.")'>".$value['sponsor_name']."</p>
                          <ul>
                            <li><img onclick='suppressAppear(".$value["sponsor_id"].", \"".$value['sponsor_name']."\", ".$x.", \"Sponsor\")' id='trash".$x."' class='cross-detail' src='../../img/delete.png' alt=''></li>
                            <li><img onclick='detailDisappear(".$x.")' id='cross".$x."' class='cross-detail' src='../../img/white-cross.png' alt=''></li>
                          </ul>
                      </div>
                      <div id='details".$x."' class='detail-hidden'>
                          <ul>
                              <li>Email: ".$value['sponsor_email']."</li>
                              <li>Téléphone: ".$value['sponsor_phone']."</li>
                              <li>Message: ".$value["sponsor_message"]."</li>
                          </ul>
                      </div>
                      ";
                  $x++;
              }else {
                echo "<p class='txt-no-content'>Il n'y a aucun sponsor à afficher pour l'instant.</p>";
              }
            }

        ?>
    </section>

    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/footer.php");
    ?>
    <script type="text/javascript" src="<?php echo $link ?>/js/pageBack.js"></script>
</body>
</html>
