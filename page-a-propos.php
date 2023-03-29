<?php get_header(); ?>
    <main>
        <?php get_template_part('templates/about/who') ?>
        <?php get_template_part('templates/about/philosophy') ?>
        <?php get_template_part('templates/shared/cta', null, array(
            "background" => array(
                "webp" => get_theme_file_uri('/assets/images/webp/gym.webp'),
                "jpg" => get_theme_file_uri('/assets/images/jpg/gym.jpg'),
                "alt" => "Transformez votre santé avec CLNRGY et son expert en préparation physique Nicholas Raymond-Giasson"
            ),
            "title" => "Commencez votre parcours de santé maintenant!",
            "buttonText" => "Contactez nous",
            "buttonLink" =>  "/contact"
        )) ?>
        
    </main>
<?php get_footer(); ?>