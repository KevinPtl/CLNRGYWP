        <footer id="main-footer">
            <div class="wrapper">
                <div class="content">
                    <ul id="left-side-footer">
                        <li><span>Services</span></li>
                        <li><a href="<?php echo site_url('/supplements') ?>">Suppléments</a></li>
                        <li><a href="<?php echo site_url('/nutrition') ?>">Nutrition</a></li>
                        <li><a href="<?php echo site_url('/entrainement') ?>">Entrainement</a></li>
                    </ul>
                    <a id="footer-logo" href="<?php echo site_url('/') ?>">
                        <picture>
                            <source type="image/webp" srcset="<?php echo get_theme_file_uri('/assets/images/webp/logo-white-fr.webp') ?>"/>
                            <img src="<?php echo get_theme_file_uri('/assets/images/png/logo-white-fr.png') ?>" alt="Mode de vie CLEANERGY">
                        </picture>
                    </a>
                    <?php get_template_part('templates/header/social-media') ?>
                    <ul id="right-side-footer">
                        <li><a href="<?php echo site_url('/blogue') ?>">Blogue</a></li>
                        <li><a href="<?php echo site_url('/') ?>">Accueil</a></li>
                        <li><a href="<?php echo site_url('/a-propos') ?>">À propos</a></li>
                        <li><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
                    </ul>
                </div>
                <div class="bottom">© <span><?php echo date("Y") ?></span> Tous droits réservés | Mode de vie Cleanergy Inc.</div>
            </div>
        </footer>

    <?php wp_footer(); ?>
    </body>
</html>