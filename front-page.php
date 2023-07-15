<?php get_header(); ?>
    <main>
        <?php get_template_part('templates/home/hero') ?>
        <?php get_template_part('templates/home/about') ?>
        <?php get_template_part('templates/home/testimonials') ?>
        <section class="cta-bg">
            <div class="content">
                <div class="wrapper">
                    <h2>Je veux faire une transformation</h2>
                    <a href="https://calendly.com/nicholas-raymondgiasson/consultation?month=2023-07" target="_blank" role="button" class="primary">Prendre rendez-vous</a>
                </div>
            </div>
        </section>
        <?php get_template_part('templates/home/services/supplements') ?>
        <?php get_template_part('templates/home/services/nutrition') ?>
        <?php get_template_part('templates/home/services/training') ?>
        <?php get_template_part('templates/home/blogs') ?>
        <?php get_template_part('templates/shared/cta', null, array(
            "background" => array(
                "webp" => get_theme_file_uri('/assets/images/webp/gym.webp'),
                "jpg" => get_theme_file_uri('/assets/images/jpg/gym.jpg'),
                "alt" => "Transformez votre santé avec CLNRGY et son expert en préparation physique Nicholas Raymond-Giasson"
            ),
            "title" => "Commencez votre parcours de santé maintenant!",
            "buttonText" => "Prendre rendez-vous",
            "buttonLink" =>  "https://calendly.com/nicholas-raymondgiasson/consultation",
            "isExternalLink" => true
        )) ?>
    </main>
<?php get_footer(); ?>