<?php
/*
Template Name: Projects
*/
?>
<?php require_once('page_header.php'); ?>
<div class="container-fluid maincontainer">
<div class="container">
<div class="row">
<section class="maintext">              
<?php 
$args = array(
  'category_name' =>  'Projects',
);
// the query
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
<!-- the loop -->
<div class="thepost-wrapper">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="thepost">
<h2><?php the_title(); ?></h2> 

<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail('thumbnail');
    }
?>
<p class="about-text"><?php the_excerpt(); ?></p>
<a class="readmore" href="<?php the_permalink(); ?>"> CONTINUE READING</a>
</div>
<?php endwhile; ?>
</div>
<!-- end of the loop -->
 
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
            </section>
</div>
</div><!-- container -->
</div><!-- container fluid -->
<?php get_footer(); ?>