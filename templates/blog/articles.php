<div class="articles">
    <?php 
        $articleConfig = array(
            "showExcerpt" => true,
            "showAuthor" => false,
            "showMore" => true
        );

        // Passing query configuration
        if ($args) {
            $retrieved_posts = get_posts($args);
            if ($retrieved_posts) {
                foreach ($retrieved_posts as $post) {
                    setup_postdata($post);
                    get_template_part('templates/shared/article-post', null, $articleConfig);
                }
                wp_reset_postdata();
            }
        } else {
            // Get default loop
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('templates/shared/article-post', null, $articleConfig);
                }
                wp_reset_postdata();
            }
        }

    ?>
</div>