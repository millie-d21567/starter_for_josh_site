<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="pls stop causing w3c errors" content="idk">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,800;1,800&display=swap" rel="stylesheet">

    <title><?php
        if (function_exists('is_tag') && is_tag()) {
            single_tag_title("Tag Archive for &quot;"); echo '&quot; - ';
        } elseif (is_archive()) {
            wp_title(''); echo ' Archive - ';
        } elseif (is_search()) {
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
        } elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title(''); echo ' - ';
        } elseif (is_404()) {
            echo 'Not Found - ';
        }
        if (is_home()) {
            bloginfo('name'); echo ' - '; bloginfo('description');
        } else {
            bloginfo('name');
        }
        if ($paged > 1) {
            echo ' - page '. $paged;
        }
    ?></title>

    <meta name="description" content="<?php
        if (is_single() || is_page()) {
            $excerpt = get_the_excerpt();

            // Fallback to content if excerpt is empty
            if (empty($excerpt)) {
                $excerpt = wp_trim_words(get_the_content(), 25);
            }

            // Final fallback to site description if both excerpt and content are empty
            if (empty($excerpt)) {
                $excerpt = get_bloginfo('description');
            }

            // Limit the description to 160 characters
            $meta_description = mb_substr(wp_strip_all_tags($excerpt), 0, 160);

            echo esc_attr($meta_description);
        } else {
            echo esc_attr(get_bloginfo('description'));
        }
    ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
</head>
<body>

<header class="container-fluid" style="background-size: cover; background-image: url(<?php the_field('headerbackgroundimage'); ?>);">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="/"><span class="josh">JOSH</span><span class="orange"> WHITKIN</span></a>

            <!-- Toggler/collapsible Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'bs-example-navbar-collapse-1',
                'menu_class' => 'navbar-nav ml-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </nav>

        <div class="tag">
            <h1><?php the_field('maintagline'); ?></h1>
        </div>
    </div> <!-- container -->
    <?php wp_head(); ?>
</header>