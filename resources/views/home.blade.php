<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/defalt_style.css') }}" rel="stylesheet" />
    <title>Jeunes pelerin d'Arès</title>
    <link
      href="{{ asset('images/icon.png') }}"
      rel="icon"
      type="img/png"
      alt="Ma Image"
    />
  </head>

  <body>
    <!-- Navigation -->
    <!-- <nav class="navbar">
            Menu le bandau
        <img class="logo-img" href="#page-top" src="{{ asset('images/logos/logo_pelerin.png') }}">
        <div class="" id="navbarResponsive">
            <ul class="">
                <li class="">
                    <a class="" href="#services">Présentation</a>
                </li>
                <li class="">
                    <a class="" href="#portfolio"> Les liens</a>
                </li>
                <li class="">
                    <a class=" " href="#about"> contact </a>
                </li>
            </ul>
        </div>
</nav> -->

    <!-- Acceul -->
    <header class="cut-section">
      <div class="header">
        <div class="marge-logo">
          <img
            class="logo-img"
            src="{{ asset('images/logos/logo_pelerin.png') }}"
          />
        </div>
        <div>
          <div class="space-text-intro">
            <h2 class="manuscrit-h2 marge-top-s marge-bot-s">
              les jeunes pèlerins vous saluent
            </h2>
            <h1 class="manuscrit-h1">faites le bien, le mal disparaitra!</h1>
          </div>
        </div>
      </div>
    </header>

    <!-- présantation -->
    <section class="presentation">
      <div class="center">
        <!--vidéo-->
        <video
          src="{{ asset('video/Happyland.mp4') }}"
          controls
          width="1000"
          autoplay
        ></video>
        <!-- texte -->
        <div class="manuscrit-p center">
          <p class="marge-p">
            Chez les pèlerins d'Arés, nous croyons que nous pouvons vivre sans
            hierarchie. Nous nous sommes organisés en petits groupes afin de se
            partager le local et de vivre des experiences differentes.
          </p>
          <p class="marge-p">
            Notre groupe des jeunes sera présent toutes les 5 semaines comme
            suit :
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
      <!-- <div class="carte">
                    <img class="" src="{{ asset('images/portfolio/blog.jpg') }}" alt="">
            <div class="">
                <h4>Le blog</h4>
                <a class="" href="michelpotayblog.net">Page d'accueil</a>
            </div>
        </div>
        <div class="carte">
            <a>
                <img class="" src="{{ asset('images/portfolio/msp.jpg') }}" alt="">
            </a>
            <div class="">
                <h4>Qui sont les pèlerins d'Arès ?</h4>
                <a class=""
                    href="http://michelpotay.info/Revelation_Ares_introduction.html?fbclid=IwAR3xevW1uIBDom4yRrrQG-Gf_NU8cfy3ZUusqMrqoIGqVARx94m4byES04Q">Michel
                    Potay.info</a>
            </div>
        </div>
        <div class="carte">
            <a>
                <div class="">
                    <div class="">

                    </div>
                </div>
                <img class="" src="{{ asset('images/portfolio/blog.jpg') }}" alt="">
            </a>
            <div class="">
                <h4>Révelation d'Arès en ligne</h4>
                <a class=""
                    href="http://michelpotay.info/RevelationdAres2009-menu.html?fbclid=IwAR35wM74rPFX1tTj8R1JMUmW3ZAfE03WiWrxVqVxQgYieZjbiYeXQf_PHIY">Lecture</a>
            </div>
        </div>
        <div class="carte">
            <a>

                <img class="" src="{{ asset('images/portfolio/msp.jpg') }}" alt="">
            </a>
            <div class="">
                <h4>Acheter la Révélation d'Arès</h4>
                <a class=""
                    href="https://www.adira.net/fr/commandes/?fbclid=IwAR1nP1Sq7_oLMHHfY0E8LofyZJ6laXCqSDzLiwGtmpMPO-moAVTZlSicjjI">Adira.net</a>
            </div>
        </div>
        <div class="carte">
            <a>

                <img class="" src="{{ asset('images/portfolio/blog.jpg') }}" alt="">
            </a>
            <div class="">
                <h4>Le pèlerinage</h4>
                <a class=""
                    href="http://michelpotay.info/Revelation_Ares_pelerinage.html?fbclid=IwAR0GMRsUDXnRLgwrYBjk7YBt9-Xj0RA7gjcl7ajXe-eGx2QlUrjMGsRyFyM">Plus
                    de rensegnement</a>
            </div>
        </div>
        <div class="carte">
            <a>

                <img class="" src="{{ asset('images/portfolio/msp.jpg') }}" alt="">
            </a>
            <div class="">
                <h4>Le local de l'Eau Bleu</h4>
                <a class=""
                    href="http://revelation-ares.paris/a-paris/l-eau-bleue-paris/?fbclid=IwAR29aXnxKu-pkzxWC0LG3lcy16d1IVWOURptdCO2NDsqah7IjkYoA2D-YOI">On
                    vous y attend &#128515;</a>
            </div>
        </div> -->
      <ul>
        <li class="carte">
          <div class="carte">
            <img src="{{ asset('images/portfolio/blog.jpg') }}" alt="" />
            <div class="">
              <h4>Le blog</h4>
              <p><a class="" href="michelpotayblog.net">Page d'accueil</a></p>
            </div>
          </div>
        </li>
      </ul>
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
