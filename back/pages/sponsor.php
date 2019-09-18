<?php
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
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/header.php");
    ?>
</head>
<body>
    <main>
      <ul class="main-list">
        <li><h1>SPONSORS</h1></li>
        <li><h2>BACK - OFFICE</h2></li>
      </ul>
    </main>
    <section class="print-result">
        <?php
            include_once($_SERVER['DOCUMENT_ROOT']."/functions/getSponsors.php");
            $data = getSponsor();
            $x = 0;
            foreach ($data as $key => $value) {
                echo "<div id='results".$x."' class='result'>
                        <p onclick='detailAppear(".$x.")'>".$value['sponsor_name']."</p>
                        <img onclick='detailDisappear(".$x.")' id='cross".$x."' class='cross-detail' src='../../img/white-cross.png' alt=''>
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
            }
        ?>
    </section>

    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/back/assets/footer.php");
    ?>
    <script type="text/javascript" src="<?php echo $link ?>/js/pageBack.js"></script>
</body>
</html>
