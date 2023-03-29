<section class="social-media-share-container">
    <h5>Partagez cet article</h5>
    <ul class="social-media-list">
        <li>
            <a 
                class="facebook"
                title="Facebook"
                target="_blank"
                href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" 
                target="_blank">
                <span class="icon">
                    <i class="fa-xl fa-brands fa-facebook" aria-hidden="true"></i>
                </span>
            </a>
        </li>
        <li>
            <a 
                class="messenger"
                title="Facebook Messenger"
                target="_blank"
                href="fb-messenger://share/?link=<?php the_permalink(); ?>" 
                target="_blank">
                <span class="icon">
                    <i class="fa-xl fa-brands fa-facebook-messenger" aria-hidden="true"></i>
                </span>
            </a>
        </li>
        <li>
            <a 
                class="whatsapp"
                title="Whatsapp"
                target="_blank"
                href="https://api.whatsapp.com/send?text=<?php the_title(); ?> - <?php the_permalink(); ?>" 
                target="_blank">
                <span class="icon">
                    <i class="fa-xl fa-brands fa-whatsapp" aria-hidden="true"></i>
                </span>
            </a>
        </li>
        <li>
            <a 
                class="email"
                title="Courriel"
                href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>">
                <span class="icon">
                    <i class="fa-xl fa-regular fa-envelope" aria-hidden="true"></i>
                </span>
            </a>
        </li>
    </ul>
</section>