<?php
    $webp_image_data = get_field('training_image_webp');
    $fallback_image_data = get_field('training_image_fallback');
?>

<section class="services--block training">
    <div class="content">
        <div class="left">
            <div class="wrapper">
                <h5>Studio ou en ligne</h5>
                <h2>Entrainement</h2>
                <p>
                    Embrassez un mode de vie plus sain avec CLEANERGY! Notre focus sur la forme physique 
                    n'est qu'une partie de notre approche globale de la santé et du bien-être. Notre 
                    équipe de formateurs hautement qualifiés et expérimentés se consacre à créer des 
                    programmes d'entrainement personnalisés adaptés à vos objectifs individuels et 
                    besoins.
                </p>
                <a href="<?php echo site_url('/entrainement') ?>" role="button" class="primary">En savoir plus</a>
            </div>
            <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri('/assets/images/webp/training-asset.webp') ?>"/>
                <img 
                    loading="lazy" 
                    src="<?php echo get_theme_file_uri('/assets/images/png/training-asset.png') ?>" 
                    alt="Nutrition"/>
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