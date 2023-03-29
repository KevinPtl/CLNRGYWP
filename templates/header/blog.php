<header id="main-header" class="blog-header sticky">
    <div class="wrapper blog-wrapper">
        <a id="logo" href="<?php echo site_url('/') ?>">
            <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri('/assets/images/webp/logo-white.webp') ?>"/>
                <img src="<?php echo get_theme_file_uri('/assets/images/png/logo-white.png') ?>" alt="Mode de vie CLEANERGY">
            </picture>
        </a>

        <div class="buttons">
            <?php wp_nav_menu(array(
                'theme_location' => 'languageSwitcherMenuLocation'
            ))?>
    
            <button
                id="search-btn"
                class="search-button">
                <span><i class="fa-lg fa-regular fa-magnifying-glass" aria-hidden="true"></i></span>
            </button>
        </div>

        <div class="search-overlay" id="search-overlay">
            <?php get_template_part('templates/header/search') ?>
        </div>
    </div>
</header>