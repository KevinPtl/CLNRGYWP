<?php
    $webp_image_data = get_field('banner_image_webp');
    $fallback_image_data = get_field('banner_image_fallback');
?>
<section class="hero">
    <div class="content">
        <div class="hero-text slide-left">
            <hgroup>
                <h3>Bienvenue chez CLNRGY</h3>
                <h1>Le meilleur <br/>de vous-même</h1>
            </hgroup>
            <p>CLNRGY a aidé plus de 500 personnes à atteindre leurs objectifs de santé.</p>
            <div class="button-container">
                <a href="<?php echo site_url('/contact') ?>"role="button" class="secondary" id="hero-cta-contact-btn">Contactez nous</a>
                <a href="https://calendly.com/nicholas-raymondgiasson/consultation" target="_blank" role="button" class="tertiary" id="hero-cta-contact-btn">Prendre rendez-vous</a>
            </div>
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