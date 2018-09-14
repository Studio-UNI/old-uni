    <footer>
        <div class="block footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-m-3">
                        <nav>
                            <div class="footer__navigation">
                                <a href="#">accueil</a>
                                <a href="#">équipe</a>
                                <a href="#">projets</a>
                                <!-- <a href="#">blog</a> -->
                                <a href="#">tarifs</a>
                                <a href="#">contact</a>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xs-6 col-m-3">
                        <div class="footer__legals">
                            <a href="#">mentions légales</a>
                            <a href="#">charte d'utilisation des cookies</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 footer__copyright">
                        © 2018 - studio UNI
                    </div>
                </div>
            </div>
        </div>
    </footer>

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

        //if ('serviceWorker' in navigator) {
          //  navigator.serviceWorker.register('sw.js');
        //}

        /****************/
    </script>
</body>

</html>