<section class="testimonials">
    <h2>Devenez la meilleure version de <span>vous-même</span></h2>
    <div class="wrapper testimonial-slider">
        <picture class="background">
            <source type="image/webp" srcset="<?php echo get_theme_file_uri('/assets/images/webp/logo-outline-bg.webp') ?>"/>
            <img role="presentation" src="<?php echo get_theme_file_uri('/assets/images/png/logo-outline-bg.png') ?>" alt="Mode de vie CLEANERGY">
        </picture>
        <div class="testimonial-slider__track glide__track" data-glide-el="track">
            <div class="testimonial-slider__slides glide__slides">
                <?php
                    $testimonials = new WP_Query(array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => -1,
                    ));
                    
                    while($testimonials->have_posts()) {
                        $testimonials->the_post();
                        $image_data = get_field('progression_image');
                        $image = !empty($image_data) ? $image_data['url'] : null;
                        ?>
                            <div class="testimonial-slider__slide">
                                <div class="content">
                                    <div class="left">
                                        <picture>
                                            <img loading="lazy" role="presentation" src="<?php echo $image ?>" alt="Mode de vie CLEANERGY">
                                        </picture>
                                    </div>
                                    <div class="right">
                                        <span class="icon"><i class="fa-solid fa-quote-left fa-2xl" aria-hidden="true"></i></span>
                                        <h2>Découvrez ce que les gens disent de <span>CLEANERGY</span></h2>
                                        <?php the_content();?>
                                        <span class="author-name"><?php the_title();?></span>
                                    </div>
                                </div>
                            </div>
                <?php } wp_reset_postdata(); ?>
                
            </div>
            <div class="arrows glide__arrows" data-glide-el="controls">
                <button 
                    aria-label="Previous slide"
                    class="arrows--prev"
                    data-glide-dir="<">
                    <span><i class="fa-solid fa-angle-left" aria-hidden="true"></i></span>
                </button>
                <button 
                    aria-label="Next slide"
                    class="arrows--next"
                    data-glide-dir=">">
                    <span><i class="fa-solid fa-angle-right" aria-hidden="true"></i></span>
                </button>
            </div>
        </div>
    </div>
</section>