<?php include "header.php" ?>
   
<!--Partie contact-->

 <section>
        <div class="block block--contact">
           <div class="container">
              <div class="contact--infos">
                  <h1>
                    Un projet web ? Un audit ? <br> Nous sommes à votre écoute. 
                    </h1>
                    <p>
                        Débutons notre partenariat ici.
                    </p>
                    <a class="link" href="mailto:contact@studio-uni.fr">contact@studio-uni.fr</a>
              </div>
           </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-s-4">
                        <form action="" class="form--contact">
                            <div class="input input--text">
                                <label for="mail">
                                  Votre adresse mail
                              </label>
                                <input type="mail" id="mail" required spellcheck="false">
                            </div>
                            <div class="input input--text">
                                <label for="name">
                                  Votre nom
                              </label>
                                <input type="text" id="name" required spellcheck="false">
                            </div>
                            <div class="input input--textarea">
                                <label for="projectDescription">Décrivez nous votre projet en quelque mots.</label>
                                <textarea name="" id="projectDescription" rows='1'></textarea>
                            </div>
                            <div class="container--button--form">
                                <button type="submit" value="envoyer" class="button button--CTA button--CTA--icon button--CTA--form">
                                    <span>Envoyer</span>
                                    <div>
                                        <svg viewBox="0 0 24 24">
                                            <polygon points="11.46 16.89 15.64 9.62 8.7 14.64 1.01 11.08 21.85 1.41 15.95 23.62 11.46 16.89"/>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container--contactShapes">
           <!-- U -->
            <div class="container--contactShapes__shape container--contactShapes__shape--grey">
                <svg viewBox="0 0 33.15 65.27">
                      <path d="M33.15,45.86c-7.59,0-13.76-6.43-13.76-14.33V0H0V30.76c0,19,14.87,34.51,33.15,34.51Z"/>
                </svg>
            </div>
            <!-- point -->
            <div class="container--contactShapes__shape container--contactShapes__shape--orange">
                <svg viewBox="0 0 50.74 48.79">
                    <ellipse cx="25.37" cy="24.4" rx="25.37" ry="24.4"/>
                </svg>
            </div>
            
            <div class="container--contactShapes__shape container--contactShapes__shape--orange">
                <svg viewBox="0 0 50.74 48.79">
                    <ellipse cx="25.37" cy="24.4" rx="25.37" ry="24.4"/>
                </svg>
            </div>

            <!-- N -->
            <div class="container--contactShapes__shape container--contactShapes__shape--grey">
                <svg viewBox="0 0 63.71 59.49">
                    <polygon class="cls-1" points="45.17 0 45.17 28.85 14.94 0 0 0 0.13 59.48 18.68 59.48 18.53 31.65 48.75 59.48 63.71 59.48 63.71 0 45.17 0"/>
                </svg>
            </div>
            <!-- I -->
            <div class="container--contactShapes__shape  container--contactShapes__shape--grey">
                <svg viewBox="0 0 18.54 59.49">
                    <rect class="cls-1" width="18.54" height="59.49"/>
                </svg>
            </div>
            
            <!-- point -->
            <div class="container--contactShapes__shape container--contactShapes__shape--orange">
                <svg viewBox="0 0 50.74 48.79">
                    <ellipse cx="25.37" cy="24.4" rx="25.37" ry="24.4"/>
                </svg>
            </div>
        </div>
    </section>
    
       <!--		<script src="js/script.js"></script>-->
    <script src="dist/assets/js/scripts.js"></script>
    <script>
        /****************
                        			Après le charchement de la page, on cherche tous les styles préchargés et on les transforme en style valide 
                        		****************/
        document.querySelectorAll('[rel="preload"][as="style"]').forEach(function(e) {
            var s = document.createElement('link');
            s.rel = "stylesheet";
            s.href = e.href;
            document.head.appendChild(s);
        });
        /****************/

        /****************
        	Faire que ça marche hors ligne.
        ****************/
        /* 
        	Ceci n'est utile que pour tester si ça fonctionne, sinon autant utiliser ce qui n'est pas en commentaire.
        */

        /*if('serviceWorker' in navigator){
        	console.log('CLIENT: service worker registration in progress.');
        	navigator.serviceWorker.register('https://cdn.css-tricks.com/service-worker.js').then(function() {
        		console.log('CLIENT: service worker registration complete.');
        	}, function() {
        		console.log('CLIENT: service worker registration failure.');
        	});
        }else{
        	console.log('CLIENT: service worker is not supported.');
        }*/

        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('sw.js');
        }

        /****************/

    </script>
</body>

</html>