<article class="post <?php if (array_key_exists("class", $args) && $args["class"]) { echo $args["class"]; } ?>">
    <a class="post-image-link" href="<?php the_permalink() ?>">
        <?php if (has_post_thumbnail()) { ?>
             <picture><?php the_post_thumbnail('article-post', array('class' => 'custom-size')); ?></picture>
        <?php }  ?>
    </a>
    <div class="article-content">
        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
        <?php if ($args["showExcerpt"]) { the_excerpt(); } ?>
    
        <?php if ($args["showAuthor"]) { ?>
            <small>
                <p>Par <?php the_author_posts_link() ?></p>
                <span class="seperator"></span>
                <time datetime="<?php the_time('d M Y') ?>"><?php the_time('d M Y') ?></time>
            </small>
        <?php } ?>
    
        <?php if ($args["showMore"]) { ?>
            <a class="more" href="<?php the_permalink() ?>">En savoir plus</a>
        <?php } ?>
    </div>
</article>