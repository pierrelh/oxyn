<?php
  $link = 'https://' . $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $link ?>/styles/actualiteStyle.css">
    <title>OXYN - Actualités</title>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/assets/header.php");
    ?>
  </head>
  <body>
    <main>
      <ul class="main-news">
        <li><h1>RETOUR SUR LE CONCERT AU SUPERSONIC !</h1></li>
        <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
        <li class="button-main-news"><a href="#">LIRE L'ARTICLE</a></li>
      </ul>
    </main>
    <section class="description">
      <section class="detail-news">
        <ul class="detail-buttons">
          <li><a id="news-button" onmouseover="hoverTopButton('news')" onmouseout="unhoverTopButton('news')" class="title-button" href="./news.php">NEWS</a></li>
          <li><a id="news-arrow" onmouseover="hoverTopButton('news')" onmouseout="unhoverTopButton('news')" class="arrow-button" href="./news.php"></a></li>
        </ul>
        <ul class="news">
          <li id="news1" class="first-news">
            <ul class="sub-news" id="buttonLink1">
              <li class="article" id="article1" onmouseover="buttonAppear(1)" onmouseout="buttonHide(1)"><a  class="article-link left" href="#">RETOUR SUR LA SOIREE AU DAMPIERRE</a></li></li>
              <li id="button1" onmouseover="buttonAppear(1)" onmouseout="buttonHide(1)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
          <li id="news2" class="second-news">
            <ul class="sub-news" id="buttonLink2">
              <li class="article" id="article2" onmouseover="buttonAppear(2)" onmouseout="buttonHide(2)"><a class="article-link middle" href="#">UNE NOUVELLE COLLABORATION CHEZ OXYN</a></li>
              <li id="button2" onmouseover="buttonAppear(2)" onmouseout="buttonHide(2)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
          <li id="news3" class="third-news">
            <ul class="sub-news" id="buttonLink3">
              <li class="article" id="article3" onmouseover="buttonAppear(3)" onmouseout="buttonHide(3)"><a  class="article-link right" href="#">LE NOUVEL ALBUM DE FLUME</a></li>
              <li id="button3" onmouseover="buttonAppear(3)" onmouseout="buttonHide(3)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <section class="detail-news">
        <ul class="detail-buttons">
          <li><a id="decouverte-button" onmouseover="hoverTopButton('decouverte')" onmouseout="unhoverTopButton('decouverte')" class="title-button" href="./nos-decouvertes.php">NOS DECOUVERTES</a></li>
          <li><a id="decouverte-arrow" onmouseover="hoverTopButton('decouverte')" onmouseout="unhoverTopButton('decouverte')" class="arrow-button" href="./nos-decouvertes.php"></a></li>
        </ul>
        <ul class="news">
          <li id="news4" class="first-news">
            <ul class="sub-news" id="buttonLink4">
              <li class="article" id="article4" onmouseover="buttonAppear(4)" onmouseout="buttonHide(4)"><a  class="article-link left" href="#">RETOUR SUR LA SOIREE AU DAMPIERRE</a></li></li>
              <li id="button4" onmouseover="buttonAppear(4)" onmouseout="buttonHide(4)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
          <li id="news5" class="second-news">
            <ul class="sub-news" id="buttonLink5">
              <li class="article" id="article5" onmouseover="buttonAppear(5)" onmouseout="buttonHide(5)"><a class="article-link middle" href="#">UNE NOUVELLE COLLABORATION CHEZ OXYN</a></li>
              <li id="button5" onmouseover="buttonAppear(5)" onmouseout="buttonHide(5)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
          <li id="news6" class="third-news">
            <ul class="sub-news" id="buttonLink6">
              <li class="article" id="article6" onmouseover="buttonAppear(6)" onmouseout="buttonHide(6)"><a  class="article-link right" href="#">LE NOUVEL ALBUM DE FLUME</a></li>
              <li id="button6" onmouseover="buttonAppear(6)" onmouseout="buttonHide(6)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <section class="detail-news">
        <ul class="detail-buttons">
          <li><a id="interviews-button" onmouseover="hoverTopButton('interviews')" onmouseout="unhoverTopButton('interviews')" class="title-button" href="./nos-interviews.php">NOS INTERVIEWS</a></li>
          <li><a id="interviews-arrow" onmouseover="hoverTopButton('interviews')" onmouseout="unhoverTopButton('interviews')" class="arrow-button" href="./nos-interviews.php"></a></li>
        </ul>
        <ul class="news">
          <li id="news7" class="first-news">
            <ul class="sub-news" id="buttonLink7">
              <li class="article" id="article7" onmouseover="buttonAppear(7)" onmouseout="buttonHide(7)"><a  class="article-link left" href="#">RETOUR SUR LA SOIREE AU DAMPIERRE</a></li></li>
              <li id="button7" onmouseover="buttonAppear(7)" onmouseout="buttonHide(7)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
          <li id="news8" class="second-news">
            <ul class="sub-news" id="buttonLink8">
              <li class="article" id="article8" onmouseover="buttonAppear(8)" onmouseout="buttonHide(8)"><a class="article-link middle" href="#">UNE NOUVELLE COLLABORATION CHEZ OXYN</a></li>
              <li id="button8" onmouseover="buttonAppear(8)" onmouseout="buttonHide(8)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
          <li id="news9" class="third-news">
            <ul class="sub-news" id="buttonLink9">
              <li class="article" id="article9" onmouseover="buttonAppear(9)" onmouseout="buttonHide(9)"><a  class="article-link right" href="#">LE NOUVEL ALBUM DE FLUME</a></li>
              <li id="button9" onmouseover="buttonAppear(9)" onmouseout="buttonHide(9)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
        </ul>
      </section>
      <section class="detail-news">
        <ul class="detail-buttons">
          <li><a id="event-button" onmouseover="hoverTopButton('event')" onmouseout="unhoverTopButton('event')" class="title-button" href="./evenements-a-venir.php">EVENEMENTS A VENIR</a></li>
          <li><a id="event-arrow" onmouseover="hoverTopButton('event')" onmouseout="unhoverTopButton('event')" class="arrow-button" href="./evenements-a-venir.php"></a></li>
        </ul>
        <ul class="news">
          <li id="news10" class="first-news">
            <ul class="sub-news" id="buttonLink1">
              <li class="article" id="article10" onmouseover="buttonAppear(10)" onmouseout="buttonHide(10)"><a  class="article-link left" href="#">RETOUR SUR LA SOIREE AU DAMPIERRE</a></li></li>
              <li id="button10" onmouseover="buttonAppear(10)" onmouseout="buttonHide(10)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
          <li id="news11" class="second-news">
            <ul class="sub-news" id="buttonLink11">
              <li class="article" id="article11" onmouseover="buttonAppear(11)" onmouseout="buttonHide(11)"><a class="article-link middle" href="#">UNE NOUVELLE COLLABORATION CHEZ OXYN</a></li>
              <li id="button11" onmouseover="buttonAppear(11)" onmouseout="buttonHide(11)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
          <li id="news12" class="third-news">
            <ul class="sub-news" id="buttonLink12">
              <li class="article" id="article12" onmouseover="buttonAppear(12)" onmouseout="buttonHide(12)"><a  class="article-link right" href="#">LE NOUVEL ALBUM DE FLUME</a></li>
              <li id="button12" onmouseover="buttonAppear(12)" onmouseout="buttonHide(12)" class="button"><a class="button-read" href="#">LIRE L'ARTICLE</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </section>
    <?php
      include_once($_SERVER['DOCUMENT_ROOT']."/assets/footer.php");
    ?>
    <script type="text/javascript" src="<?php echo $link ?>/js/actualite.js"></script>
  </body>
</html>
