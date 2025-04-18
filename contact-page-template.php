<?php
/*
Template Name: Contact
*/
?>
<?php require_once('page_header.php'); ?>
    <div class="container">
        <div class="row">
            <section class="maintext">
                <article class="contact-page">
                    <h1><?php the_field('introductiontitle'); ?></h1>
                    <p><?php the_field('introductorytext'); ?></p>
                    
                    <img src="<?php the_field('contact_image'); ?>" alt="Contact Image">
                    
                    <h2><?php the_field('specialtiesoverviewtitle'); ?></h2>
                    <p><?php the_field('specialties_text'); ?></p>
                    
                    <h2><?php the_field('contact_info_title'); ?></h2>
                    <ul>
                        <li>Email: <a href="mailto:<?php the_field('email_field_title'); ?>"><?php the_field('email_field_title'); ?></a></li>
                        <li>Phone: <?php the_field('phone_field_title'); ?></li>
                    </ul>
                    
                    <h2><?php the_field('social_media_section_title'); ?></h2>
                    <ul>
                        <li><a href="<?php the_field('linkedin_field_title'); ?>" target="_blank">LinkedIn</a></li>
                        <li><a href="<?php the_field('twitter_field_title'); ?>" target="_blank">Twitter</a></li>
                        <li><a href="<?php the_field('portfolio_link_title'); ?>" target="_blank">Portfolio</a></li>
                    </ul>
                    
                    <h2><?php the_field('articles_section_title'); ?></h2>
                    <ul>
                        <li><a href="<?php the_field('article_1_field_title'); ?>">"<?php the_field('article_1_field_title'); ?>"</a></li>
                        <li><a href="<?php the_field('article_2_field_title'); ?>">"<?php the_field('article_2_field_title'); ?>"</a></li>
                    </ul>
                    
                    <h2><?php the_field('call-to-action_title'); ?></h2>
                    <p><?php the_field('closing_text_field_title'); ?></p>
                </article>
            </section>
        </div>
    </div><!-- container -->
</div><!-- container fluid -->
<?php get_footer(); ?>