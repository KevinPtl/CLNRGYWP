<?php
    $webp_image_data = get_field('about_image_webp');
    $fallback_image_data = get_field('about_image_fallback');
?>
<section class="about">
    <div class="content">
        <div class="left">
            <h2>À propos de <span>Cleanergy</span></h2>
            <p>
            Chez CLNRGY, nous sommes fiers d'offrir plusieurs types de services entièrement personnalisés à la suite d'une évaluation complète de votre situation. Pour débuter, le service de planification de supplémentation vous permettra de rehausser différentes fonctions métaboliques. Ensuite, nous vous offrons un service d'élaboration de plan d'entraînement ainsi que des sessions d'entraînement en personne ou à distance. Finalement, nous offrons un service de haut niveau concernant la prise de décisions orientées par rapport à votre nutrition. CLNRGY vise à rehausser les standards en matière de services dans l'industrie de l'entraînement et de la supplémentation. Notre mission est claire : s'adapter à tous les types de clientèles qui décideront de nous faire confiance pour permettre à chacun de vivre des résultats inégalés. C'est le but ultime de CLNRGY !
            </p>
        </div>
        <div class="right">
            <picture>
                <source type="image/webp" srcset="<?php echo $webp_image_data['url'] ?>"/>
                <img 
                    loading="lazy" 
                    role="presentation" 
                    src="<?php echo $fallback_image_data['url'] ?>" 
                    alt="<?php echo $fallback_image_data['alt'] ?>"/>
            </picture>
        </div>
    </div>
</section>