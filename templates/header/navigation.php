<nav id="main-nav">
    <ul id="main-nav-list">
        <li><a id="nav-link-about-us" <?php if(is_page('a-propos')) echo 'class="active"'?> href="<?php echo site_url('/a-propos') ?>">À propos</a></li>
        <li><a id="nav-link-success-stories" <?php if(is_page('resultats')) echo 'class="active"'?> href="<?php echo site_url('/resultats') ?>">Les résultats</a></li>
        <!-- <li><a id="nav-link-home" <?php if(is_page('home')) echo 'class="active"'?> href="<?php echo site_url('/') ?>">Accueil</a></li> -->
        <li class="has-sub-menu" id="service-sub-menu">
            <a <?php if(is_page('supplements') || is_page('nutrition') || is_page('entrainement')) echo 'class="active"'?> href="#">
                Services
                <span class="icon"><i class="fa-light fa-angle-down" aria-hidden="true"></i></span>
            </a>
            <ul class="sub-nav">
                <li><a id="nav-link-supplements" <?php if(is_page('supplements')) echo 'class="active"'?> href="<?php echo site_url('/supplements') ?>">Suppléments</a></li>
                <li><a id="nav-link-nutrition" <?php if(is_page('nutrition')) echo 'class="active"'?> href="<?php echo site_url('/nutrition') ?>">Nutrition</a></li>
                <li><a id="nav-link-training" <?php if(is_page('entrainement')) echo 'class="active"'?> href="<?php echo site_url('/entrainement') ?>">Entrainement</a></li>
            </ul>
        </li>
        <li><a id="nav-link-blog" <?php if(get_post_type() == "post") echo 'class="active"'?> href="<?php echo site_url('/blogue') ?>" target="_blank">Blogue</a></li>
        <li><a id="nav-link-contact" <?php if(is_page('contact')) echo 'class="active"'?> href="<?php echo site_url('/contact') ?>">Contact</a></li>
        <li class="language">
            <?php wp_nav_menu(array(
                'theme_location' => 'languageSwitcherMenuLocation'
            ))?>
        </li>
    </ul>
</nav>