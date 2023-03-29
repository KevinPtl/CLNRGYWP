<section class="about-service">
    <picture class="background">
        <source type="image/webp" srcset="<?php echo get_theme_file_uri('/assets/images/webp/logo-outline-bg.webp') ?>"/>
        <img role="presentation" src="<?php echo get_theme_file_uri('/assets/images/png/logo-outline-bg.png') ?>" alt="Mode de vie CLEANERGY">
    </picture>
    <div class="content">
        <h2><?php echo $args['title']; ?></h2>
        <?php foreach ($args['paragraphs'] as $paragraph) { ?>
            <p><?php echo $paragraph?></p>
        <?php } ?>
    </div>
</section>