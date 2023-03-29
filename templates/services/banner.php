<section class="banner-service">
    <picture>
        <source type="image/webp" srcset="<?php echo $args['background']["webp"] ?>"/>
        <img 
            loading="lazy" 
            src="<?php echo $args['background']["jpg"] ?>" 
            alt="<?php echo $args['background']["alt"] ?>"/>
    </picture>
    <div class="content fade-in">
        <img src="<?php echo $args['icon_svg'] ?>" alt="">
        <h2><?php echo $args['title']; ?></h2>
        <h6><?php echo $args['subtitle']; ?></h6>
    </div>
</section>