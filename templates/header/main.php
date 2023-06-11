<?php
    $classes = array();

    if(is_page('a-propos') || is_page('contact') || $args['isHeaderSticky'] || is_page('checkout')) {
        array_push($classes, 'sticky');
    }

    if ($args['isDarkMode']) {
        array_push($classes, 'dark-mode');
    }

    $headerClasses = implode(' ', $classes);
?>

<header id="main-header" class="<?php echo $headerClasses ?>">
    <div class="wrapper">

        <?php if ($args['isDarkMode']) { ?>
            <a id="logo" href="<?php echo site_url('/') ?>">
                <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri('/assets/images/webp/logo-white.webp') ?>"/>
                    <img src="<?php echo get_theme_file_uri('/assets/images/png/logo-white.png') ?>" alt="Mode de vie CLEANERGY">
                </picture>
            </a>
        <?php } else { ?>
            <a id="logo" href="<?php echo site_url('/') ?>">
                <picture>
                    <source type="image/webp" srcset="<?php echo get_theme_file_uri('/assets/images/webp/logo.webp') ?>"/>
                    <img src="<?php echo get_theme_file_uri('/assets/images/png/logo.png') ?>" alt="Mode de vie CLEANERGY">
                </picture>
            </a>
        <?php } ?>

        <div class="overlay" id="menu-overlay"></div>
        <?php if ($args['showMainNav']) { ?>
            <aside id="navigation-menu">
                <?php get_template_part('templates/header/navigation', null, $args) ?>
            </aside>
            <?php get_template_part('templates/header/widgets', null, $args) ?>
        <?php } ?>
    </div>
</header>
