<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Studio Web UNI, spécialiste de l'expérience client    ligne.">
    <meta name="theme-color" content="#F26724">
    <link rel="manifest" href="manifest.json">
    <title>Studio Web UNI</title> 

    <style>

        svg{
            height:24px;
        }
    </style>  

    <!-- On lance déjà une requête en "preload" pour avoir le style en cache et le charger le plus vite possible après que le premier affichage soit fait -->

    <link rel="preload" href="dist/assets/css/style.css" as="style">
    <link rel='preload' media='screen and (min-width: 375px)' href='dist/assets/css/style-s.css' as="style"/>
    <link rel='preload' media='screen and (min-width: 599px)' href='dist/assets/css/style-m.css' as="style"/>
    <link rel='preload' media='screen and (min-width: 899px)' href='dist/assets/css/style-l.css' as="style"/>
    <link rel='preload' media='screen and (min-width: 1199px)' href='dist/assets/css/style-xl.css' as="style"/>
    <link rel='preload' media='screen and (min-width: 1699px)' href='dist/assets/css/style-xxl.css' as="style"/>
    
</head>
<body>
   
    <!--    Header-->

    <header>
        <div class="header">
            <a class="logoUni" href="index.php">
                <div class="logoUni__logo">
                    <svg viewBox="0 0 64.5 52.1">
                        <ellipse class="st0" cx="56.5" cy="7" rx="5.8" ry="5.6"/>
                        <path class="st1" d="M51.8,16.3V32L35.4,16.3h-8.1v16.5c0,4.1-3.2,7.5-7.2,7.5s-7.2-3.4-7.2-7.5V16.3H2.7v16.1
                                    c0,9.9,7.8,18,17.3,18c10.1,0,17.1-8.7,17.3-16.9l16.5,15.2h8.1V16.3H51.8z"/>
                    </svg>
                </div>
                <div class="logoUni__title animated--slow fadeInLeft">
                    <h2>
                        Studio Web
                    </h2>
                </div>
            </a>
            <div class="menu">
                <div class="menu__links">
                    <a href="#">équipe</a>
                    <a href="#">projets</a>
                    <a href="contact.php">contact</a>
                </div>
                <div class="burgerMenu">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </header>

    <!--	    Navigation du site -->
    <div class="bgGrey"></div>
    <div class="mainNav">
    <div class="mainNav__decoration">
        <div>
             <svg viewBox="0 0 64 125">
                <path d="M0,87.82c14.53,0,26.36-12.31,26.36-27.44V0H63.49V58.91C63.49,95.35,35,125,0,125Z"/>
            </svg>
         </div>
         <div>
             <svg viewBox="0 0 64 125">
              <rect x="12.71" y="0.61" width="38.58" height="123.78"/>
            </svg>
         </div>
         <div>
             <svg viewBox="0 0 114.97 107.76">
              <polygon points="81.24 1.23 81.24 52.9 27.31 1.23 0.66 1.23 0.89 107.76 33.98 107.76 33.72 57.91 87.62 107.76 114.31 107.76 114.31 1.23 81.24 1.23"/>
            </svg>
         </div>
    </div>
     <div class="mainNav__bg">
         <div></div>
         <div></div>
     </div>
        <div class="mainNav__lastProject">
            <div>
                <h3 class="titleNav">Dernier Projet</h3>
                <div>
                    <h2>CFTC Postes et Télécoms, nouveau départ pour les adhérents</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat assumenda rem fugit id eum iure, esse unde molestiae a quis sed qui dolores soluta tempora impedit nulla nam optio. Natus.</p>
                    <a href="" class="links">Découvrir le projet</a>
                </div>
            </div>
        </div>
          <div class="mainNav__navigation">
              <div>
                  <h3 class="titleNav">Navigation</h3>
                  <nav>
                      <ul>
                          <li><a href="/index.php" class="active">Accueil</a></li>
                          <li>
                              <a href="/services.php">Services</a>
                              <ul>
                                  <li><a href="/services/site-vitrine.php">Sites vitrine</a></li>
                                  <li><a href="services/site-e-commerce">Sites e-commerce</a></li>
                                  <li><a href="services/site-sur-mesures">Sites sur mesures</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Projets</a></li>
                          <li><a href="#">L'équipe</a></li>
                          <li><a href="/contact.html">Contact</a></li>
                      </ul>
                  </nav>
                  <div class="navSocialNetworks">
                      <a href="/facebook">facebook</a>
                      <a href="/facebook">linked'in</a>
                  </div>
              </div>
        </div>
    </div>
    
   
