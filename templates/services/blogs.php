<section class="blogs blog-service dark-bg">
    <h2><?php echo $args["title"] ?></h2>
    <div class="content">
        <?php 
            $servicePagePosts = new WP_Query(array(
                "posts_per_page" => 2,
                "category_name" => $args["category"]->slug
            ));
            while($servicePagePosts->have_posts()) {
                $servicePagePosts->the_post();
                get_template_part('templates/shared/article-post', null, array(
                    "showExcerpt" => false,
                    "showAuthor" => true,
                    "showMore" => false,
                    "class" => "dark"
                ));
            }
            wp_reset_postdata();
        ?>
    </div>

    <div class="more-blogs">
        <a 
            href="<?php echo get_category_link($args["category"]->term_id) ?>" 
            role="button" 
            class="primary">
            Voir plus
        </a>
    </div>
</section>