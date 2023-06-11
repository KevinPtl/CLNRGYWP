<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PGFJ7FV');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGFJ7FV"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php 
        // Default
        $headerConfig = array(
            'isHeaderSticky' => false,
            'isDarkMode' => false,
            'showMainNav' => true
        );

        // Blog
        if (get_post_type() == "post") {
            $headerConfig = array(
                'isHeaderSticky' => true,
                'isDarkMode' => true,
                'showMainNav' => true
            );
        }
        
        get_template_part('templates/header/main', null, $headerConfig);
    ?>