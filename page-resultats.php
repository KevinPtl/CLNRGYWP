<?php get_header(); ?>
    <main>
        <?php 
            $webp_image_data = get_field('banner_image_webp');
            $fallback_image_data = get_field('banner_image_fallback');

            get_template_part('templates/services/banner', null, array(
                "title" => "Les résultats",
                "title-classes" => "long-title",
                "subtitle" => "Devenez la meilleure version de vous-même",
                "background" => array(
                    "webp" => $webp_image_data['sizes']['page-banner'],
                    "jpg" => $fallback_image_data['sizes']['page-banner'],
                    "alt" => ""
                ),
                "icon_svg" => get_theme_file_uri('/assets/images/svg/training-icon-white.svg')
            ))
        ?>
        <section class="testimonials">
            <h2>Découvrez ce que les gens disent de <span>CLNRGY</span></h2>
            <div class="content">
                <div class="video-container">
                    <iframe 
                        width="100%"
                        height="100%" 
                        src="https://www.youtube.com/embed/ESDMAZePwwI" 
                        title="Témoignage de Megann Laberge envers CLNRGY" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-container">
                    <iframe 
                        width="100%"
                        height="100%"
                        src="https://www.youtube.com/embed/pLCK2-QRfyg" 
                        title="Témoignage #2 de Zach Dépault" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-container">
                    <iframe 
                        width="100%"
                        height="100%"
                        src="https://www.youtube.com/embed/iLDsgGQEZ1g" 
                        title="Témoignage de Martin concernant le Pure Collagen Peptides" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-container">
                    <iframe 
                        width="100%"
                        height="100%"
                        src="https://www.youtube.com/embed/Q1EB5unc9ms" 
                        title="Témoignage de John Constat concernant Nicholas Raymond-Giasson de CLNRGY" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        <?php get_template_part('templates/home/testimonials') ?>
    </main>
<?php get_footer(); ?>