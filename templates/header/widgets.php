<ul class="header-widgets <?php echo $args['isDarkMode'] ? 'dark-mode' : '' ?>">
    <li>
        <button
            id="search-btn"
            class="widget-button">
            <span><i class="fa-lg fa-regular fa-magnifying-glass" aria-hidden="true"></i></span>
        </button>
    </li>
    <li>
        <button 
            id="open-menu-btn" 
            class="menu-button widget-button">
            <div>
                <span><i class="fa-xl fa-regular fa-bars" aria-hidden="true"></i></span>
                <span><i class="fa-xl fa-regular fa-xmark" aria-hidden="true"></i></span>
            </div>
        </button>
    </li>
    <div class="search-overlay" id="search-overlay">
        <?php get_template_part('templates/header/search') ?>
    </div>
</ul>

            