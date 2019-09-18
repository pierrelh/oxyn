<?php
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
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/header.php");
    ?>
</head>
<body>
    <main>
      <ul class="main-list">
        <li><h1>BARS</h1></li>
        <li><h2>BACK - OFFICE</h2></li>
      </ul>
    </main>
    <section class="print-result">
        <?php
            include_once($_SERVER['DOCUMENT_ROOT']."/functions/getBars.php");
            $data = getBar();
            $x = 0;
            foreach ($data as $key => $value) {
                echo "<div id='results".$x."' class='result'>
                        <p onclick='detailAppear(".$x.")'>".$value['bar_name']."</p>
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
        ?>
    </section>

    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/footer.php");
    ?>
    <script type="text/javascript" src="<?php echo $link ?>/js/pageBack.js"></script>

</body>
</html>
