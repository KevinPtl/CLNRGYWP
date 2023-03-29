<?php 
    wp_reset_postdata();
    get_header();
    $current_post_id = get_the_ID();
    $category_ids = wp_get_post_categories($current_post_id);
?>
    <main>
        <?php get_template_part('templates/blog/banner'); ?>
        <section class="main-article">
			<div class="back">
                <a role="button" href="<?php echo site_url('/blogue') ?>">Retour aux articles<span><i class="fa-regular fa-angle-right"></i></span></a>
            </div>
            <div class="article-wrapper">
                <?php get_template_part('templates/blog/social-media-share'); ?>
                <article>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </article>
                <?php get_template_part('templates/blog/social-media-share'); ?>
            </div>
			<div class="back">
                <a role="button" href="<?php echo site_url('/blogue') ?>">Retour aux articles<span><i class="fa-regular fa-angle-right"></i></span></a>
            </div>
        </section>
        <section class="blog-home">
            <div class="content">
                <div class="blog-section">
                    <h6>À lire aussi</h6>
                </div>
                <?php 
                    get_template_part('templates/blog/articles', null, array(
                        'category__in' => $category_ids,
                        'post__not_in' => array($current_post_id),
                        'posts_per_page' => 3,
                    )); 
                ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>