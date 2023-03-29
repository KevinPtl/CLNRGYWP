<section class="step-service">
    <h2 class="title"><?php echo $args["title"] ?></h2>
    <div class="content">
        <?php foreach ($args["steps"] as $key=>$step) { ?>
            <div class="row">
                <div class="left">
                    <div class="container">
                        <svg width="100%" height="100%" viewBox="0.00 0.00 100 100" id="1284860734"> 
                            <g>
                                <polygon points="50,0, 100,20 100,80 50,100 0,80, 0,20 " style="fill:#d7e490;"></polygon>
                            </g>
                        </svg>
                        <span class="step"><?php echo $key + 1 ?></span>
                    </div>
                </div>
                <div class="right">
                    <h2><?php echo $step['title'] ?></h2>
                    <p><?php echo $step['text'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>