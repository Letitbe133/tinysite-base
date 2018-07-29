<?php
  require_once('contact.php');
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>TinySite BASE</title>
    <meta name="viewport" content="width=device-width initial-scale=1 user-scalable=yes">
    <!-- CSS au-dessus de la ligne de flotaison -->
    <style>
      html, body {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: sans-serif;
        }
        a, a:active, a:visited {
          text-decoration: none;
        }
        .navbar-fixed {
          height: 64px;
        }
        nav {
          position: fixed;
          width: 100%;
          height: 64px;
          line-height: 64px;
          z-index: 997;
        }
        nav ul {
          margin: 0;
          float: right;
          list-style: none;
        }
        nav ul li {
          display: inline-block;
        }
        nav li a {
          color: white;
          font-size: 1.2rem;
          height: 64px;
          line-height: 64px;
          padding: 15px;

        }
        .nav-wrapper {
          background-color: #00838f;
          position: relative;
          height: 100%;
        }
        header {
          position: relative;
          display: flex;
          justify-content: center;
          align-items: center;
          background-image: url("assets/bg_mobile.jpeg");
          background-size: cover;
          background-position: center center;
          height: 95vh;
        }
        .content {
          width: 80%;
          color: white;
          text-align: center;
        }
        @media only screen and (min-width: 992px) {
          #mobile-menu {
          display: none;
          }
          .sidenav-trigger {
            display: none;
          }
          header {
            background-image: url("assets/bg_desktop.jpeg");
          }
        }    
    </style>
    <!-- CSS au-dessus de la ligne de flotaison (FIN)-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <!-- CSS Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
   integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
   crossorigin=""/>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="Shortcut icon" href="favicon.ico" type="image/x-icon" />
<!-- Open Graph Meta Tags -->
  	<meta property="og:title" content="">
  	<meta property="og:site_name" content="">
  	<meta property="og:url" content="">
  	<meta property="og:description" content="">
  	<meta property="og:type" content="website">
  	<meta property="og:image" content="">
  </head>
  <body >
<!-- Menu -->
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper cyan darken-3">
          <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <!-- Menu desktop -->
          <ul class="right hide-on-med-and-down table-of contents">
            <li><a href="#section1">C'est quoi ?</a></li>
            <li><a href="#section2">Pourquoi ?</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <!-- Menu mobile -->
          <ul class="sidenav table-of contents" id="mobile-menu">
            <li><a class="sidenav-close" href="#section1">C'est quoi ?</a></li>
            <li><a class="sidenav-close" href="#section2">Pourquoi ?</a></li>
            <li><a class="sidenav-close" href="#contact">Contact</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- MENU -->
<!-- HEADER -->
    <header>
      <div class="content">
        <div class="row">
          <div class="col s12 center-align">
            <img class="responsive-img" src="assets/logo-white.png" alt="Logo TyniSite" width="200px">
          </div>
          <div class="col s12 ">
            <h1 class="center-align white-text">Un site web simple et efficace, pour permettre à tous de faire grandir ses idées grâce au web</h1>
            <div class="separator col s4 offset-s4 divider"></div>
          </div>
          <div class="col s12 social center-align">
            <a href="https://www.facebook.com/cooldevcrew" target="_blank"><img class="responsive-img" src="assets/logo-fb.png" alt="facebook"></a>
            <a href="https://twitter.com/cooldev_crew" target="_blank"><img class="responsive-img" src="assets/logo-twitter.png" alt="twitter"></a>
          </div>
        </div>
                  <div class="fixed-action-btn horizontal">
    			<a href='mailto:hello@cooldev.xyz' class="btn-floating btn-large red"><i class="material-icons">mail_outline</i></a>
   			 <ul>
      			<li>
  						<div class="chip">
              hello@cooldev.xyz
  						</div>
        			</li>
    			</ul>
 			 </div><!--BUTTON-->
      </div>
      <div class="overlay"></div>
    </header>
<!-- HEADER FIN -->
<!-- SECTION1 -->
<section id="section1" class="scrollspy">
      <div class="row">
        <div class="col s12 m8 offset-m2 separator">
          <h2 class="center-align grey-text">Le TinySite, c'est un site web comme une carte de visite, mais en mieux !</h2>
        </div>
        </div><!--TITLE-->
        <div class="row">
        <div id="cards" class="col s12 l10 offset-l1">
          <div class="col s12 m8 offset-m2 l4 ">
            <div class="card">
              <div class="card-image">
                <img class="activator" src="assets/picto-pig.png" alt="Un site web abordable">
                <span class="activator btn-floating halfway-fab waves-effect waves-light cyan darken-2"><i class="material-icons">add</i></span>
              </div>
              <div class="card-content">
                <h3 class="card-title activator">Abordable</h3>
              </div>
					<div class="card-reveal">
              <h4 class="card-title">A partir de 499 € ht <i class="material-icons right">close</i></h4>
              <h5>Inclus : </h5>
              <ul>
              	<li>Hébergement pendant 1 an</li>
              	<li>Nom de domaine "mon-domaine.tinysite.fr" inclus (possibilité de lier votre propre nom de domaine)</li>
              </ul>
              <h5>Options : </h5>
					<ul>
              	<li>Modifications : 49€ ht par modification</li>
                <li>Hébergement : 49€ ht après la 1ère année</li>
              	<li>Forfait maintenance : 89 € ht/an (hébergement et modifications de vos informations)</li>
              </ul>
              <p>Le TinySite que nous réalisons pour vous vous appartient. Vous pouvez à tout moment récuperer le code pour vous occuper vous-même de sa maintenance.</p>
              </div>
            </div>
          </div><!--CARD 1-->
        <div class="col s12 m8 offset-m2 l4 ">
          <div class="card">
            <div class="card-image">
					<img  class="activator" src="assets/picto-responsive.png" alt="Un site web adaptatif">
          <span class="activator btn-floating halfway-fab waves-effect waves-light cyan darken-2"><i class="material-icons">add</i></span>

            </div>
            <div class="card-content">
              <h3 class="card-title activator">Multi-support</h3>
            </div>
            <div class="card-reveal">
              <h4 class="card-title">TinySite est responsive<i class="material-icons right">close</i></h4>
              <p>La moitié des internautes vous cherche depuis un mobile. Le TinySite s'adapte à la majorité des supports web actuels. </p>
              </div>
          </div>
        </div><!--CARD 2-->
        <div class="col s12 m8 offset-m2 l4 ">
          <div class="card">
            <div class="card-image">
              <img class="activator" src="assets/picto-perso.png" alt="Un site web évolutif">
              <span class="activator btn-floating halfway-fab waves-effect waves-light cyan darken-2"><i class="material-icons">add</i></span>

            </div>
            <div class="card-content">
              <h3 class="card-title activator">Evolutif</h3>
            </div>
            <div class="card-reveal">
              <span class="card-title">Vos besoins évoluent ?<i class="material-icons right">close</i></span>
              <p>Votre site web vous suit ! Ajouter des sections, des pages...<br>Contactez-nous, nous vous proposerons des solutions adaptées.</p>
            </div>
          </div>
      </div><!--CARD 3-->
      </div>
		</div><!--CARDS-->

</section><!--SECTION 1 FIN-->
<!-- SECTION2 -->
    <section id="section2" class="cyan darken-2 scrollspy">
    	 <div class="container">
    	    <div class="row">
          	<div class="col s12 m8 offset-m2 white-text">
              <h2 class="center-align">Pourquoi votre présence sur le web est indispensable ?</h2>
            </div>
            <div class="separator col s2 offset-s5 divider"></div>
          </div>
          <div class="row">
            <div class="col s12 m6 l6 white-text">
    					<div class="center-align">
                <noscript>
                  <img width="80px;" src="assets/picto-shop-2.png" alt="Parlez de vous">
                </noscript>
                <img class="lazy" data-src="assets/picto-shop-2.png" data-alt="Parlez de vous" width="80px;" src="" alt="">
    					</div>
              <p>Où vous trouver, comment vous contacter, êtes-vous ouvert aujourd'hui ?<br/>
              Autant d'informations que vos futurs clients doivent trouver rapidement, parce que c'est ça qu'ils cherchent !
              </p>
            </div>
           	<div class="col s12 m6 l6 white-text">
              <div class="center-align">
                <noscript>
                  <img width="80px;" src="assets/picto-shop-2.png" alt="Parlez de ce que vous faites">
                </noscript>
                <img class="lazy" data-src="assets/picto-shop-2.png" data-alt="Parlez de ce que vous faites" width="80px;" src="" alt="">
              </div>
              <div>
                <p>Que faites vous et pourquoi le faites vous si bien ?<br/>
                   Du contenu de qualité favorise votre présence sur les moteurs de recherche et vos clients vous trouvent plus facilement !
                   Ca sert à cela un site vitrine :)
                </p>
              </div>
           	</div>
           </div>
          </div>
    </section>
    <!--SECTION2 FIN-->

    <!-- SECTION MAP -->
    <section>
      <div id="map" style="height: 300px;"></div>
    </section>
    <!-- SECTION MAP FIN -->

    <!-- SECTION INSTAGRAM -->
      <section id="instagram" class="row">

      </section>
    <!-- SECTION INSTAGRAM FIN -->

    <!-- Formulaire de contact -->
    <section id="contact" class="container scrollspy">
      <div class="col s12">
        <h2 class="dark-green center-align">Contactez-nous !</h2>
        <div class="col s12"></div>
      </div>
      <div class="row">
        <form id="contactForm" class="col s12" action="#" method="post">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input placeholder="John Doe" id="nom" name="nom" type="text" class="validate" required>
              <label for="name">Votre nom</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
              <input placeholder="john.doe@mail.com" id="email" name="email" type="email" class="validate" required>
              <label for="email">Votre adresse mail</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">subject</i>
              <input placeholder="Objet de votre message" id="objet" name="objet" type="text" class="validate" required>
              <label for="subject">Sujet</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">textsms</i>
              <textarea placeholder="Tapez votre message" id="message" name="message" type="text" class="materialize-textarea" required></textarea>
              <label for="message">Votre message</label>
            </div>
          </div>
          <input type="text" hidden name="check">
          <!-- Switch -->
          <div class="switch">
            <label>
                Non
                <input type="checkbox" name="consent_contact">
                <span class="lever"></span>
                Oui
            </label>
          </div>
          <div class="col s12">
            <p>En renseignant votre adresse mail, vous acceptez qu'il soit utilisé dans le cadre de relations commerciales.
            </p>
          </div>
          <div class="row">
            <div class="col s12 center-align">
              <button class="btn waves-effect waves-light cyan darken-3" id="submit" type="submit" name="submit">Envoyer
                <i class="material-icons right">send</i>
              </button>
            </div>
          </div>
          <div id="feedback">
            <?php echo $feedback; ?>
  	      </div>
        </form>
      </div>
    </section>
    <!-- CONTACT FORM FIN-->
<!--SECTION FOOTER-->
  <!-- FOOTER -->
    <footer class="page-footer cyan darken-2 ">
      <div class="container  ">
        <div class="row ">
          <div class=" col m4 s12 center-align">
            <h5 class="center-align white-text">Contacts</h5>
            <div class="separator col s2 offset-s5 divider"></div>
            <div class="col s12 m6 center-align">
              <noscript>
                <img src="assets/lio.png" alt="Lionel - développement" width="60px;">
              </noscript>
           	 <img class="lazy" data-src="assets/lio.png" data-alt="Lionel - développement" src="" alt="" width="60px;"><p class="center-align grey-text text-lighten-4">lionel@cooldev.xyz</p>
            </div>
            <div class="col s12 m6 center-align ">
              <noscript>
                <img src="assets/mi.png" alt="Mylène - graphisme et intégration" width="60px;">
              </noscript>
           	  <img class="lazy" data-src="assets/mi.png" data-alt="Mylène - graphisme et intégration" src="" alt="" width="60px;"><p class="center-align grey-text text-lighten-4">mylene@cooldev.xyz</p>
            </div>
          </div>
          <div class="center-align social col m4  s12">
            <h5 class="white-text">Réseaux sociaux </h5>
            <div class="separator col s2 offset-s5 divider"></div>
            <div class="col  s12 center-align">
              <noscript>
                <a href="https://www.facebook.com/cooldevcrew" target="_blank" ><img src="assets/logo-fb.png" alt="Suivez-nous sur Facebook"></a>
              </noscript>
              <a href="https://www.facebook.com/cooldevcrew" target="_blank" ><img class="lazy" data-src="assets/logo-fb.png" data-alt="Suivez-nous sur Facebook" src="" alt=""></a>
              <noscript>
                <a href="https://twitter.com/cooldev_crew" target="_blank" ><img src="assets/logo-twitter.png" alt="Suivez-nous sur Twitter"></a>
              </noscript>
              <a href="https://twitter.com/cooldev_crew" target="_blank" ><img class="lazy" data-src="assets/logo-twitter.png" data-alt="Suivez-nous sur Twitter" src="" alt=""></a>
            </div>
          </div>
          <div class="center-align col m4 s12">
            <h5 class="white-text">Adresse</h5>
            <div class="separator col s2 offset-s5 divider"></div>
            <div class="col s12">
             <p class="grey-text text-lighten-4">Cosens<br>2, rue de Rome<br>13001 Marseille</p>
            </div>
          </div>
        </div>
      </div>
      <!-- FOOTER FIN-->
      <!--FOOTER COPYRIGHT-->
      <div class="footer-copyright grey-text ">
        <div class="container ">
        <span class="cyan-text text-lighten-3">CC BY-NC-SA 4.0 - 2018 / <a class="cyan-text text-lighten-3" href="http://www.mpaw.xyz/site-web.php" target="_blank">Mon Tinysite</a> par <a class="cyan-text text-lighten-3" href="http://www.mpaw.xyz/" target="_blank">Ma Petite Agence</a></span> 
          <a class="modal-trigger right cyan-text text-lighten-3" href="#modal1" >Mentions légales</a>
          <!--MODAL-->
          <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
              <h3>SIRET</h3>
              <p>Sous CAPE Cosens<br>SIRET : 419 369 798 00048 <br>N° Formateur : 93 13 113 41 13</p>
              <h3>Responsable de la publication :</h3> <p>Cooldev</p>
              <h3>Hébergement :</h3>
              <p>GANDI SAS, Société par Actions Simplifiée au capital de 300.000€ ayant son siège social au 63-65 boulevard Massena à Paris (75013) FRANCE, immatriculée sous le numéro 423 093 459 RCS PARIS N° TVA FR81423093459 Téléphone : +33.(0) 1 70.37.76.61 .</p>
              <h3>Gestion des données personnelles :</h3>
              <p>Votre vie privée est très importante pour nous. Pour connaître le trafic sur ce site internet, Nous utilisons Piwik. Piwik est une solution d’analytics qui respecte votre vie privée conformément aux recommandations de la CNIL et ne demande aucune déclaration préalable.</p>
            </div>
            <div class="modal-footer ">
              <a href="#!" class="modal-action modal-close btn-floating "><i class="material-icons ">highlight_off</i></a>
            </div>
          </div>
        </div>
        <!--MODAL FIN-->
      </div><!--FOOTER COPYRIGHT FIN-->
    </footer>
    <!--SECTION FOOTER FIN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <!-- script Leaflet -->
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
   integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
   crossorigin=""></script>

    <script type="text/javascript" src="js/main.js"></script>
    </script>
  </body>
</html>
