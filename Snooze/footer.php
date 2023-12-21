
    <!-- Pied de page -->
    <div class="footer-dark mont animate-de-bas">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-2 item" id="footOne">
                        <h3>Général</h3>
                        <ul>
                            <li><a href="<?php echo home_url('troubles') ?>">Conseils</a></li>
                            <li><a href="<?php echo home_url('professionnels') ?>">Professionnels</a></li>
                            <li><a href="<?php echo home_url('carte') ?>">Carte</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-2 item" id="footTwo">
                        <h3>Outil</h3>
                        <ul>
                            <li><a href="<?php echo home_url('connexion') ?>">Connexion</a></li>
                            <li><a href="<?php echo home_url('dashboard') ?>">Journal</a></li>
                            <li><a href="<?php echo home_url('confidentialité') ?>">Mentions légales</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 item text" id="footThree">
                        <h3>A propos</h3>
                        <p>Snooze est un site web dédié au bien être et au sommeil. Il a été conçu par des étudiants de deuxième année de multimédia à Bruxelles. Notre objectif est d'améliorer la qualité du sommeil en informant et en conseillant les utilisateurs.</p>
                        <h3 class="pt-5">Contact</h3>
                        <a href="mailto:snooze@isfsc.be">snooze@isfsc.be</a>
                    </div>
                    <div class="col-md-3 item" id="footFour">
                        <h3>Newsletter</h3>
                        <div class="newsletter-form">
                            <input type="email" class="form-control" placeholder="Your email">
                            <button class="btn btn-primary" type="submit">S'inscrire</button>
                        </div>
                    </div>
                    <div class="col item social"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/insta.svg"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/link.svg"></a><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.svg"></a><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg"></a><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/tiktok.svg"></a></div>
                </div>
                <p class="copyright">Snooze © 2023</p>
            </div>
        </footer>
    </div>

    <!-- Lien vers la bibliothèque jQuery depuis un CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Lien vers la bibliothèque Bootstrap JavaScript depuis un CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Lien vers le fichier JavaScript global -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>
</body>

</html>
