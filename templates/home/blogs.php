<section class="blogs">
    <h2>Articles de blogue</h2>
    <div class="content">
        <?php 
            $homePagePosts = new WP_Query(array(
                "posts_per_page" => 2
            ));
            while($homePagePosts->have_posts()) {
                $homePagePosts->the_post();
                get_template_part('templates/shared/article-post', null, array(
                    "showExcerpt" => false,
                    "showAuthor" => true,
                    "showMore" => false,
                ));
            }
            wp_reset_postdata();
        ?>
    </div>

    <div class="more-blogs">
        <a href="<?php echo site_url('/blogue') ?>" role="button" class="primary">Voir plus</a>
    </div>
</section>