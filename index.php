<?php get_header(); ?>
    <main>
        <section class="blog-home">
            <div class="content">
                <div class="blog-search">
                    <h2>Blogue</h2>
                    <div class="filter-btns">
                        <a <?php if (!is_category()) { echo 'class="active"'; } ?> href="<?php echo site_url('/blogue') ?>" role="button">Tout</a>
                        <?php get_template_part('templates/blog/categories') ?>
                    </div>
                </div>
                <?php get_template_part('templates/blog/articles') ?>
                <?php get_template_part('templates/blog/pagination') ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>