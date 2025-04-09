<?php
    /*
        Template name: home page
    */
?>

<?php get_header();?>    <!-- Tells WordPress to include header-php -->
<section class="container-fluid aboutbg text-center">
    <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!-- custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
        <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

        <div class="blocker"></div>
    </div><!-- container-->
</section>

<section class="container-fluid articlesbg">
    <div class="container">
        <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
        <div class="row"><!--  a row that gives us access to the BS columns-->

            <div class="col-md-4">
            <?php $image = get_field('articleimage'); ?><img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
                <p class="date"><?php the_field('articledate'); ?></p>
                <p class="article-p"><?php the_field('articleexcerpt'); ?></p>
                <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
            </div>

            <div class="col-md-4">
            <?php $image = get_field('modellingimage'); ?><img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <h4 class="article-title"><?php the_field('modellingtitle'); ?></h4>
                <p class="date"><?php the_field('modellingdate'); ?></p>
                <p class="article-p"><?php the_field('modellingexcerpt'); ?></p>
                <a href="<?php the_field('modellingreadmore'); ?>" class="readmore">CONTINUE READING</a>
            </div>

            <div class="col-md-4">
            <?php $image = get_field('designimage'); ?><img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <h4 class="article-title"><?php the_field('designtitle'); ?></h4>
                <p class="date"><?php the_field('designdate'); ?></p>
                <p class="article-p"><?php the_field('designexcerpt'); ?></p>
                <a href="<?php the_field('designreadmore'); ?>" class="readmore">CONTINUE READING</a>
            </div>




        </div><!-- row -->
    </div><!-- container -->
</section><!-- container-fluid -->

<?php get_footer(); ?>   <!-- Tells WordPress to include footer.php -->