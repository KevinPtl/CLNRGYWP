<?php
    $webp_image_data = get_field('banner_image_webp');
    $fallback_image_data = get_field('banner_image_fallback');
?>
<section class="hero">
    <div class="content">
        <div class="hero-text slide-left">
            <hgroup>
                <h3>Bienvenue chez Cleanergy</h3>
                <h1>Le meilleur <br/>de vous-même</h1>
            </hgroup>
            <a href="<?php echo site_url('/contact') ?>"role="button" class="primary" id="hero-cta-contact-btn">Contactez nous</a>
        </div>
        <picture class="fade-in">
            <source type="image/webp" srcset="<?php echo $webp_image_data['sizes']['page-banner'] ?>"/>
            <img 
                role="presentation"
                src="<?php echo $fallback_image_data['sizes']['page-banner'] ?>"
                alt="<?php echo $fallback_image_data['alt'] ?>"/>
        </picture>
    </div>
</section>