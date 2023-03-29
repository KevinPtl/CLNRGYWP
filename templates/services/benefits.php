<section class="service-benefits">
    <h2 class="title"><?php echo $args["title"] ?></h2>
    <div class="content">
        <?php foreach ($args["points"] as $key=>$points) { ?>
            <div class="item">
                <span><i class="<?php echo $points["fa-icon-class"] ?>" aria-hidden="true"></i></span>
                <h3><?php echo $points["text"] ?></h3>
            </div>
        <?php } ?>
    </div>
</section>