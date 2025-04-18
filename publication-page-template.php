<?php
/*
Template Name: Publications
*/
?>
<?php require_once('page_header.php'); ?>
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="maintext">              
            <?php 
$args = array(
  'category_name' =>  'Publications',
);
// the query
$the_query = new WP_Query( $args ); ?>

                <!-- Introduction Section -->
                <p><?php the_field('introductorytext'); ?></p>

                <?php if ($the_query->have_posts()) : ?>
                    <div class="thepost-wrapper">
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="thepost">
                                <h2><?php the_title(); ?></h2>

                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail');
                                } ?>

                                <p class="about-text"><?php the_excerpt(); ?></p>
                                <a class="readmore" href="<?php the_permalink(); ?>">READ MORE</a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e('Sorry, no publications matched your criteria.'); ?></p>
                <?php endif; ?>

            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>