<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">

    <title>
        <?php
            if (function_exists('is_tag') && is_tag()) {
                single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; 
            } elseif (is_archive()) {
                wp_title(''); echo ' Archive - '; 
            } elseif (is_search()) {
                echo 'Search for &quot;'.esc_html(get_search_query()).'&quot; - '; 
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
            if (get_query_var('paged') > 1) {
                echo ' - page '. get_query_var('paged'); 
            }
        ?>
    </title>

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

</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="http://206.189.45.97/~mesh9/"><span class="josh">JOSH</span><span class="orange">WHITKIN</span></a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
      
        <?php 

wp_nav_menu( array(
  'theme_location'  => 'primary',
  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
  'container'       => 'div',
  'container_class' => 'collapse navbar-collapse',
  'container_id'    => 'bs-example-navbar-collapse-1',
  'menu_class'      => 'navbar-nav ml-auto',
  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
  'walker'          => new WP_Bootstrap_Navwalker(),
) );

?>

      </nav> 

<header class="container-fluid bg1"> 
    <div class="container">
    <div class="header-image">
    <h1 class="header-text">Games Design For the Future</h1>
    </div>
    </div>
<?php wp_head(); ?>
</header>