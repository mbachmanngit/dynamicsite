<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta viewport content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="functions.js"></script>
    <title>(test) Dynamic Site - MB</title>
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

    </div>

    <section id="umich" class="umich">

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

      <div class="umich-content">

        <div class="umich-title">
          <h2 class="um-h2">Über Mich</h2>
        </div>

        <p class="um-p">

          Diese Site dreht sich um meinen Weg in Design und Code. <br>
          Die Entwicklung von Onlinelösungen und Design sind Lernprozesse, mit jeder Site die man schreibt wird man besser.
          Das sollte man auch anstreben. Immer.
          Hier finden Sie vorallem eine Dokumentation meines Lernprozesses und eine
          Sammlung von meinen Websites. Der vermutlich noch sehr dünne Inhalt wird stetig wachsen.
          Und wer weis, vielleicht kann ich mit dieser Seite ja auch dem ein oder anderen helfen!
          Bei Fragen, Anfragen oder Interresse an einem produktiven Austausch <a href="#kontakt">kontaktieren</a>
          Sie mich gerne über das <a href="#kontakt">Kontaktformular</a> weiter unten auf dieser Site.

        </p>

        <p class="um-p">

          <i>Nun wirklich zu mir</i> <br>
          Markus Bachmann. 20 Jahre alt. Anstrebender Entwickler für Onlinelösungen, Designer. Soweit die Kurzfassung. <br>
          Ich schreibe Websites um Menschen mit ihnen zu erreichen, um die online verbrachte Zeit einfach und schön zu gestalten.
          Design ist eine Einstellung.

        </p>

      </div>

    </section>

    <section id="youtube" class="youtube">

      <div class="flex-center">

        <div class="column-1">

          <h2 class="yt-h2"><span>YouTube.</span><br>Design in seiner<br>Entstehung und mehr.</h2>

          <p class="yt-p">
            Was wenn es eine Plattform gäbe, auf der man Videos von einzelnen Projekten
            posten kann?... <br>
            Auf meinem YouTube Kanal poste ich vereinzelt Videos von Designprojekten wie z.B.
            Speedarts von Fotomanipulationen.
          </p>

        </div>

        <div class="column-1">
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
          <h2 class="gh-h2"><span>GitHub.</span><br>Onlineprojekte, Code<br>und Einblicke</h2>
          <p class="gh-p">
            Eine Möglichkeit beine Projekte live zu beobachten und sogar Vorschläge zu machen. <br>
            Sie können jede meiner Änderungen im Code verfolgen und nachvollziehen,
            erklärt durch meine Notizen.
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