<?php
/*
Template Name: CV
*/
?>
<?php require_once('page_header.php'); ?>
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="maintext">              
                <article class="excerpts">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="post single-page">

                            <?php if (has_post_thumbnail()) : ?>
                                <div class="header-image">
                                    <?php the_post_thumbnail('full'); ?>
                                </div>
                            <?php endif; ?>

                            <h3 class="posttitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

                            <div class="postcontent">
                                <?php the_content(); ?>
                                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
                            </div><!-- postcontent -->

                        </div><!-- post -->

                    <?php endwhile; else : ?>
                        <div class="post">
                            <p>Sorry, no posts found.</p>
                        </div>
                    <?php endif; ?>
                </article>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>