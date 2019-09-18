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
    <title>OXYN - Artistes</title>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/header.php");
    ?>
</head>
<body>
    <main>
      <ul class="main-list">
        <li><h1>ARTISTES</h1></li>
        <li><h2>BACK - OFFICE</h2></li>
      </ul>
    </main>
    <section class="print-result">
        <?php
            include_once($_SERVER['DOCUMENT_ROOT']."/functions/getArtists.php");
            $data = getArtist();
            $x = 0;
            foreach ($data as $key => $value) {
                echo "<div id='results".$x."' class='result'>
                        <p onclick='detailAppear(".$x.")'>".$value['artist_name']."</p>
                        <img onclick='detailDisappear(".$x.")' id='cross".$x."' class='cross-detail' src='../../img/white-cross.png' alt=''>
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
                        <li>Démo: ".$value["artist_demo"]."</li>
                    </ul>
                </div>";
                $x++;
            }
        ?>
    </section>
    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/footer.php");
    ?>
    <script type="text/javascript" src="<?php echo $link ?>/js/pageBack.js"></script>
</body>
</html>
