<section class="blog-banner">
    <?php if (has_post_thumbnail()) { ?>
        <picture><?php the_post_thumbnail('post-banner'); ?></picture>
    <?php }  ?>
    <div class="content">
        <h2><?php the_title(); ?></h2>
        <small>
            <p>Par <?php the_author_posts_link() ?></p>
            <span class="seperator"></span>
            <time datetime="September 26, 2020"><?php the_time('d M Y') ?></time>
        </small>
    </div>
</section>