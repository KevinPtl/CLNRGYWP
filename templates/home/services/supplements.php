<?php
    $webp_image_data = get_field('supplement_image_webp');
    $fallback_image_data = get_field('supplement_image_fallback');

    if (empty($webp_image_data) && empty($fallback_image_data)) {
        $webp_image_data = array(
            'sizes' => array(
                'service-image' => get_theme_file_uri('/assets/images/webp/supplements.webp')
            ),
            'alt' => 'Suppléments personnalisés par Mode de vie Cleanergy pour un corps en pleine forme - Nous travaillons avec vous pour élaborer un plan de suppléments adapté à vos objectifs de santé, à votre style de vie et à vos besoins nutritionnels uniques. En utilisant les dernières connaissances en nutrition, nous vous aidons à améliorer votre santé et votre forme physique de manière sûre et efficace.'
        );

        $fallback_image_data = array(
            'sizes' => array(
                'service-image' => get_theme_file_uri('/assets/images/png/supplements.png')
            ),
            'alt' => 'Suppléments personnalisés par Mode de vie Cleanergy pour un corps en pleine forme - Nous travaillons avec vous pour élaborer un plan de suppléments adapté à vos objectifs de santé, à votre style de vie et à vos besoins nutritionnels uniques. En utilisant les dernières connaissances en nutrition, nous vous aidons à améliorer votre santé et votre forme physique de manière sûre et efficace.'
        );
    }
?>

<section class="services--block supplements">
    <div class="content">
        <div class="left">
            <div class="wrapper">
                <h5>Évaluation pour des</h5>
                <h2>Suppléments</h2>
                <p>
                    Les suppléments alimentaires jouent un rôle crucial dans la promotion de la santé physique et mentale. 
                    En prenant les bons suppléments, vous pouvez améliorer vos niveaux d'énergie, renforcer votre santé 
                    intestinale et votre système immunitaire, et poser les bases pour un corps et une mentalité en meilleure santé.
                    
                </p>
                <a href="<?php echo site_url('/supplements') ?>" role="button" class="primary">En savoir plus</a>
            </div>
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