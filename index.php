<?php
  session_start();

  if (!isset($_SESSION['u_id'])) {
    header("Location: login.php");
  }
 ?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta viewport content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="video.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="functions.js"></script>
    <title>M. Bachmann</title>
  </head>
  <body>

    <div class="nav-open">
      <div class="nav--close-cta">
        <p>Schliessen</p>

        <div class="close--cta-x">

          <div class="sbar1"></div>
          <div class="sbar2"></div>

        </div>
      </div>

      <nav>
        <ul>
          <a href="#umich"><li>Über Mich</li></a>
          <a href="#youtube"><li>YouTube</li></a>
          <a href="#github"><li>GitHub</li></a>
          <a href="#kontakt"><li>Kontakt</li></a>
        </ul>

        <div class="triangle">
        </div>
      </nav>

      <div class="logout-cta">
        <form class="" action="logout.in.php" method="POST">
          <button type="submit" name="abmelden"><p>Abmelden</p></button>
        </form>
      </div>

    </div>

  <header id="landingp">
    <div class="bg-stripes">
      <div class="menu--cta">

        <div class="mbar1"></div>
        <div class="mbar2"></div>
        <div class="mbar3"></div>

        <p>Menü</p>

      </div>

      <div class="mb-title">

        <h1>M.Bachmann</h1>

        <div class="utitle">
          <p>code.design.passion</p>
        </div>

      </div>
    </div>
  </header>

    <section id="umich" class="umich">
      <div class="umich-content">

         <div class="umich-title">
          <h2 class="um-h2">Über Mich</h2>
        </div>

       <p class="um-p">

        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
        sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
        Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.

      </p>

        <p class="um-p">

          takimata sanctus est Lorem ipsum dolor sit amet.<br>
          sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
          Stet clita kasd gubergren,
          no sea takimata sanctus est Lorem ipsum dolor sit amet.

        </p>

      </div>

    </section>

    <section id="youtube" class="youtube">

      <div class="flex-center">

        <div class="column-1">

          <h2 class="yt-h2"><span>YouTube.</span><br>Design in seiner<br>Entstehung und mehr.</h2>

          <p class="yt-p">
            takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolor <br>
            takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolo
          </p>

        </div>



        <div class="column-1">
          <div class="video-wrap">
          <div class="video">
            <video src="peacefulbeach.mp4" autoplay muted></video>
          </div>
          <div class="controls">

            <div class="playpause">
              <i class="material-icons" style="font-size: 42px; color:#fff;">pause</i>
            </div>
            <div class="timebar">
            <input id="seekbar" type="range" min="0" max="100" value="0" step="1">
            </div>
            <div class="volume">
              <i class="material-icons" style="font-size: 36px; color:#fff;">volume_off</i>
            </div>

          </div>
        </div>
        <img class="yt-img" src="images/ytthumb.png" alt="peacefulbeach">
      </div>

    </div>

      <a href="#" onclick="alert('für diesen Button ist noch keine Weiterleitung verfügbar.'); return false;">
      <div class="raw-cta">weiter zu YouTube</div></a>

    </section>

    <section id="github" class="github">

      <div class="flex-center">

        <div class="column-1">
          <a href="#" onclick="alert('für dieses Bild ist noch keine Aktion verfügbar.'); return false;">
            <div class="img1">
              <img class="gh-img-1" src="images/gith1.jpg" alt="gith1">
              <p class="hover-t">Liste der letzten Updates</p>
            </div>
          </a>
          <a href="#" onclick="alert('für dieses Bild ist noch keine Aktion verfügbar.'); return false;">
            <div class="img2">
              <img class="gh-img-2" src="images/gith2.jpg" alt="gith2">
              <p class="hover-t">veränderter Code eines Updates</p>
            </div>
          </a>
        </div>

        <div class="column-1">
          <h2 class="gh-h2"><span>GitHub.</span><br>Onlineprojekte, Code<br>etc.</h2>
          <p class="gh-p">
            takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolor <br>
            takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet. Lorem ipsum dolo
          </p>
          <a href="#" onclick="alert('für diesen Button ist noch keine Weiterleitung verfügbar.'); return false;">
          <div class="raw-cta">weiter zu GitHub</div></a>
        </div>

      </div>

    </section>

    <section id="kontakt" class="kontakt">

      <div class="column-2">
        <h2 class="k-h2">Kontakt</h2>

        <form class="kontakt-form" action="kontaktmsg.php" method="POST">
          <input type="text" name="Name" id="name" value="" placeholder="Name">
          <input type="text" name="Email" id="email" value="" placeholder="E-Mail">
          <textarea name="Nachricht" rows="16" cols="48" id="nachricht" placeholder="Nachricht"></textarea>
          <input type="submit" name="submit" class="raw-cta" value="Abschicken">
        </form>

      </div>

    </section>

    <div class="footer-hr"></div>

    <section class="footer">
      <div class="flex-center">
        <div class="column-1">
          <p>© Markus Bachmann 2017<br><b>email:</b> <a href="mailto:ma_bachmann@web.de">
            ma_bachmann@web.de</a>
          </br><b>mobil:</b> auf Anfrage</p>
        </div>
        <div class="column-1">
          <p><a href="#">Impressum</a></p>
        </div>
      </div>
    </section>

  </body>
</html>
