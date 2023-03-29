<?php
    require get_theme_file_path('/includes/contact-form-submit.php');

    function clnrgy_files() {
        wp_enqueue_script('clnrgy-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
        wp_enqueue_script('font-awesome', '//kit.fontawesome.com/0354802c4e.js');
        wp_enqueue_style('clnrgy_style', get_theme_file_uri('/build/index.css'));
        wp_localize_script('clnrgy-js', 'clnrgyData', array(
            "root_url" => get_site_url()
        ));

        if (is_page(array('contact'))) {
            //wp_enqueue_script('google-recaptcha', '//google.com/recaptcha/api.js');
            wp_localize_script("clnrgy-js", "contact_form", array('url'=>admin_url('admin-ajax.php'), 'nonce'=> wp_create_nonce('contact_form_nonce')));
        }
    }

    function clnrgy_theme_support() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menu('languageSwitcherMenuLocation', 'Language Switcher Menu Location');
    }

    function clnrgy_custom_routes() {
        register_rest_route('clnrgy/v1', 'blog-search', array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'clnrgy_blog_search_results'
        ));
    }

    function clnrgy_blog_search_results($data) {
        $query = new WP_Query(array(
            'post_type' => 'post',
            's' => sanitize_text_field($data['term']),
            'trp_language' => 'en'
        ));

        $searchResults = array();

        while ($query->have_posts()) {
            $query->the_post();
            array_push($searchResults, array(
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(),
                'authorName' => get_the_author(),
                'image' => get_the_post_thumbnail_url(0, 'thumbnail')
            ));
        }

        return $searchResults;
    }

    add_image_size('page-banner', 1920, 1080, true);
    add_image_size('service-image', 600, 500, true);
    add_image_size('article-post', 500, 300, true);
    add_image_size('article-banner', 1920, 1280, true);
    add_action('wp_enqueue_scripts', 'clnrgy_files');
    add_action('after_setup_theme', 'clnrgy_theme_support');
    add_action('rest_api_init', 'clnrgy_custom_routes');
?>