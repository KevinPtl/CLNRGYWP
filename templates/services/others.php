<section class="service-others">
    <h2 class="title"><?php echo $args["title"] ?></h2>
    <div class="content">
        <?php foreach ($args["services"] as $service) { ?>
            <div class="item">
                <img src="<?php echo $service["svg_icon"] ?>">
                <h2><?php echo $service["title"] ?></h2>
                <a href="<?php echo site_url($service["link"]) ?>" role="button" class="primary">En savoir plus</a>
            </div>
        <?php } ?>
        
    </div>
</section>