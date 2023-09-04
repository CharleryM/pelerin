<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
    <title>Jeunes pelerin d'Arès</title>
    <link
      href="{{ asset('images/icon_header.png') }}"
      rel="icon"
      type="img/png"
      alt="Ma Image"
    />
  </head>

  <body>

    <!-- header -->
    <header class="cut-section">
      <div class="header">
        <div class="marge-logo">
          <img
            class="logo-img"
            src="{{ asset('images/logo_pelerin.png') }}"
          />
        </div>
        <div>
          <div class="space-text-intro">
            <h2 class="style-h2 marge-top-s marge-bot-s">
              les jeunes pèlerins vous saluent
            </h2>
            <h1 class="style-h1">faites le bien, le mal disparaitra!</h1>
          </div>
        </div>
      </div>
    </header>

    <!-- présantation -->
    <section class="presentation">
      <div class="center">
        <!--vidéo-->
        <video
          src="{{ asset('Happyland.mp4') }}"
          controls
          width="1000"
          autoplay
        ></video>
        <!-- texte -->
        <div class="style-p center">
          <p class="marge-p">
            Chez les pèlerins d'Arés, nous croyons que nous pouvons vivre sans
            hierarchie. Nous nous sommes organisés en petits groupes afin de se
            partager le local et de vivre des experiences differentes.
          </p>
          <p class="marge-p">
            Notre groupe des jeunes sera présent toutes les 5 semaines. Nos prochaines dates sont :
          </p>
          <p class="marge-p">Du lundi 23 au samedi 28 septembre</p>
          <p class="marge-p">Du lundi 28 octobre au samedi 2 novembre</p>
          <p class="marge-p">Du lundi 2 au samedi 7 décembre</p>
          <p class="marge-p">Du lundi 6 au samedi 11 janvier</p>
          <p class="marge-p">
            Sur ces dates nous ouvrons de 9h30 à 19h en semaine, et de 9h30 à
            18h le samedi.
          </p>
          <p class="marge-p">
            La permanence hors de ces semaines est de 12h à 19h.
          </p>
        </div>
      </div>
    </section>

    <!-- Les Lien -->
    <section class="links">
      <!-- grille -->
      <div class="grille">
        <div class="carte">
          <img class="img-carte" src="{{ asset('images/blog.jpg') }}" alt="" />
          <div class="center ">
            <h3 class="style-h3">Le blog</h3>
            <p><a class="style-p marge-p" href="michelpotayblog.net">Page d'accueil</a></p>
          </div>
        </div>

        <div class="carte">
          <img class="img-carte" src="{{ asset('images/msp.jpg') }}" alt="" />
          <div class="center ">
            <h3 class="style-h3">Qui sont les pèlerins d'Arès ?</h3>
            <p><a class="style-p marge-p" href="http://michelpotay.info/Revelation_Ares_introduction.html?fbclid=IwAR3xevW1uIBDom4yRrrQG-Gf_NU8cfy3ZUusqMrqoIGqVARx94m4byES04Q">Michel
                    Potay.info</a></p>
          </div>
        </div>

        <div class="carte">
          <img class="img-carte" src="{{ asset('images/blog.jpg') }}" alt="" />
          <div class="center ">
            <h3 class="style-h3">Révelation d'Arès en ligne</h3>
            <p><a class="style-p marge-p" href="http://michelpotay.info/RevelationdAres2009-menu.html?fbclid=IwAR35wM74rPFX1tTj8R1JMUmW3ZAfE03WiWrxVqVxQgYieZjbiYeXQf_PHIY">Lecture</a></p>
          </div>
        </div>

        <div class="carte">
          <img class="img-carte" src="{{ asset('images/blog.jpg') }}" alt="" />
          <div class="center ">
            <h3 class="style-h3">Le blog</h3>
            <p><a class="style-p marge-p" href="michelpotayblog.net">Page d'accueil</a></p>
          </div>
        </div>

        <div class="carte">
          <img class="img-carte" src="{{ asset('images/blog.jpg') }}" alt="" />
          <div class="center ">
            <h3 class="style-h3">Le blog</h3>
            <p><a class="style-p marge-p" href="michelpotayblog.net">Page d'accueil</a></p>
          </div>
        </div>
        <div class="carte">
          <img class="img-carte" src="{{ asset('images/blog.jpg') }}" alt="" />
          <div class="center ">
            <h3 class="style-h3">Le blog</h3>
            <p><a class="style-p marge-p" href="michelpotayblog.net">Page d'accueil</a></p>
          </div>
        </div>  
      </div>
  </section>

    <!-- Local -->
    <section class="local" id="about">
      <div class="">
        <h2 class="">notre local</h2>
        <h3 class="">nous vous accueilerons avec plaisir</h3>
      </div>
      <div class="info">
        <div class="">
          <img class="" src="{{ asset('images/gps.jpg') }}" />
          <h4 class="">adresse</h4>
          <p class="">32 rue Raymond Losserand, 75014 paris</p>
        </div>
        <div class="">
          <img class="" src="{{ asset('images/locaux.png') }}" />
          <h4 class="">Nos contacts</h4>
          <a class="">Paris</a>
          <a>: 01 43 22 34 40</a>
          <p class="">jeunes@eaubleue.org</p>
        </div>
      </div>
    </section>
  </body>
</html>
