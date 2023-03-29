<header id="main-header" <?php if(is_page('a-propos') || is_page('contact')) echo 'class="sticky"'?>>
    <div class="wrapper">
        <a id="logo" href="<?php echo site_url('/') ?>">
            <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri('/assets/images/webp/logo.webp') ?>"/>
                <img src="<?php echo get_theme_file_uri('/assets/images/png/logo.png') ?>" alt="Mode de vie CLEANERGY">
            </picture>
        </a>
        <div class="overlay" id="menu-overlay"></div>
        <aside id="navigation-menu">
            <?php get_template_part('templates/header/navigation') ?>
            <?php get_template_part('templates/header/social-media') ?>
        </aside>
        <button 
            id="open-menu-btn" 
            class="menu-button">
            <div>
                <span><i class="fa-2xl fa-regular fa-bars" aria-hidden="true"></i></span>
                <span><i class="fa-2xl fa-regular fa-xmark" aria-hidden="true"></i></span>
            </div>
        </button>
    </div>
</header>