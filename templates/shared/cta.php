<section class="cta">
    <picture>
        <source type="image/webp" srcset="<?php echo $args['background']["webp"] ?>"/>
        <img 
            loading="lazy" 
            src="<?php echo $args['background']["jpg"] ?>" 
            alt="<?php echo $args['background']["alt"] ?>"/>
    </picture>
    <div class="content">
        <div class="wrapper">
            <h2><?php echo $args["title"] ?></h2>
            <a href="<?php echo site_url($args["buttonLink"]) ?>" role="button" class="primary"><?php echo $args["buttonText"] ?></a>
        </div>
    </div>
</section>