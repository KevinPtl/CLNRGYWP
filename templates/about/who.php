<?php
    $webp_image_data = get_field('about_image_webp');
    $fallback_image_data = get_field('about_image_fallback');
?>
<section class="about-sections">
    <div class="content">
    <div class="left">
            <picture class="slide-left">
                <source type="image/webp" srcset="<?php echo $webp_image_data['url'] ?>"/>
                <img 
                    loading="lazy" 
                    src="<?php echo $fallback_image_data['url'] ?>" 
                    alt="<?php echo $fallback_image_data['alt'] ?>"/>
            </picture>
        </div>
        <div class="right fade-in fast">
            <h2>Qui nous sommes</h2>
            <p>
                CLEANERGY est fier de présenter Nicholas Raymond-Giasson, notre préparateur physique dévoué. Avec plus de 15 ans d'expérience et une formation continue dans le domaine de la nutrition, Nicholas est un expert dans son domaine. Il est en constante communication et fait du mentorat avec <a href="https://www.instagram.com/paul_gagne_pg_performance/reels/" target="_blank">Paul Gagné</a> de façon hebdomadire. De plus, il a suivi des formations prestigieuses telles que la nutrition individualisée personnalisée de Wolfgang Unsold (2019), Somatraining avec Guy Voyer (2015-2018), Symposium SANTÉ par optimum education (2017), Biosignature base par Poliquin (2013) et First Line Therapy par Metagenetics (2013). Nicholas est passionné par les transformations avant/après et pratique l'entraînement en salle depuis plus de 15 ans.
            </p>
        </div>
    </div>
</section>