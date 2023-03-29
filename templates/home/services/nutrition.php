<?php
    $webp_image_data = get_field('nutrition_image_webp');
    $fallback_image_data = get_field('nutrition_image_fallback');
?>

<section class="services--block nutrition">
    <div class="content reverse">
        <div class="left">
            <div class="wrapper">
                <h5>Décisions orientées en</h5>
                <h2>Nutrition</h2>
                <p>
                    Chez CLEANERGY, nous aidons nos clients à faire les choix alimentaires les plus adaptés à leurs objectifs grâce à des décisions orientées en nutrition. Nous travaillons en étroite collaboration avec nos clients pour élaborer des plans d'orientation alimentaire qui tiennent compte de leurs habitudes nutritionnels, de leur mode de vie et de leurs objectifs à long terme.
                </p>
                <a href="<?php echo site_url('/nutrition') ?>" role="button" class="transparent">En savoir plus</a>
            </div>
            <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri('/assets/images/webp/nutrition-asset.webp') ?>"/>
                <img 
                    loading="lazy" 
                    src="<?php echo get_theme_file_uri('/assets/images/png/nutrition-asset.png') ?>"/>
            </picture>
        </div>
        <div class="right">
            <picture>
                <source type="image/webp" srcset="<?php echo $webp_image_data['sizes']['service-image'] ?>"/>
                <img 
                    loading="lazy" 
                    src="<?php echo $fallback_image_data['sizes']['service-image'] ?>" 
                    alt="<?php echo $fallback_image_data['alt'] ?>"/>
            </picture>
        </div>
    </div>
</section>