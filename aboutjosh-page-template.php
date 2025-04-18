<?php
/*
Template Name: About Josh
*/
?>
<?php require_once('small_header.php'); ?>

    <section class="text-center">
        <h1 class="project-header-title"><?php the_field('project_header_title'); ?></h1>
        <h2 class="header-title"><?php the_field('header_title'); ?></h2>
    </section>

<div class="container main-content">
    <section class="introduction">
        <h2><?php the_field('introductiontitle'); ?></h2>
        <p><?php the_field('introduction'); ?></p>
    </section>

    <section class="creative-storytelling">
        <h2><?php the_field('storytelling_passion_title'); ?></h2>
        <p><?php the_field('storytelling_passion_text'); ?></p>
    </section>

    <section class="interactive-projects">
        <h2><?php the_field('interactive_narratives_title'); ?></h2>
        <p><?php the_field('interactive_narratives_text'); ?></p>
    </section>

    <section class="teamwork">
        <h2><?php the_field('teamwork_title'); ?></h2>
        <p><?php the_field('teamwork_text'); ?></p>
    </section>

    <section class="design-elements">
        <h2><?php the_field('design_elements_title'); ?></h2>
        <p><?php the_field('design_elements_text'); ?></p>
    </section>

    <section class="cta-section text-center">
        <h2><?php the_field('cta_section_title'); ?></h2>
        <p><?php the_field('cta_section_text'); ?></p>
    </section>

    <section class="collaboration">
        <h2><?php the_field('collaboration_title'); ?></h2>
        <p><?php the_field('collaboration_text'); ?></p>
    </section>

    <section class="versatility">
        <h2>Versatility as a Designer</h2>
        <p><?php the_field('versatility_statement_text'); ?></p>
    </section>
</div>

<?php get_footer(); ?>