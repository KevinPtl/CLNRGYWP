<section class="contact-form sections">
    <div class="content">
        <div class="left">
            <picture>
                <source type="image/webp" srcset="<?php echo get_theme_file_uri('/assets/images/webp/contact-professional-flip.webp') ?>"/>
                <img 
                    loading="lazy" 
                    src="<?php echo get_theme_file_uri('/assets/images/jpg/contact-professional-flip.jpg') ?>" 
                    alt="Image montrant un corps en forme et musclé avec le logo CLEANERGY en surbrillance, symbolisant la transformation de votre corps grâce à nos plans de nutrition et d'entraînement personnalisés"/>
            </picture>
        </div>
        <div class="right slide-right">
            <?php get_template_part('templates/contact/info') ?>
            <?php get_template_part('templates/contact/form') ?>
        </div>
    </div>
</section>