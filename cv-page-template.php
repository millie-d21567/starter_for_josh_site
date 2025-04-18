<?php
/*
Template Name: CV
*/
?>
<?php require_once('page_header.php'); ?>
    <div class="container">
        <div class="row">
            <section class="maintext">
                <article class="cv-page">
                    <h1><?php the_field('full_name'); ?></h1>
                    
                    <h2>Contact Information</h2>
                    <ul>
                        <li>Email: <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
                        <li>Phone: <?php the_field('phone_number'); ?></li>
                        <li>Address: <?php the_field('address'); ?></li>
                        <li>LinkedIn: <a href="<?php the_field('linkedin_profile'); ?>" target="_blank">LinkedIn</a></li>
                        <li>Website: <a href="<?php the_field('website'); ?>" target="_blank">Website</a></li>
                    </ul>
                    
                    <h2><?php the_field('summary_title'); ?></h2>
                    <p><?php the_field('summary_text'); ?></p>
                    
                    <h2>Work Experience</h2>
                        <ul>
                                <li>
                                    <h3><?php the_field('job_title'); ?> <?php the_field('company_name'); ?></h3>
                                    <p><?php the_field('start_date'); ?> <?php the_field('end_date'); ?></p>
                                    <p><?php the_field('job_description'); ?></p>
                                </li>
                        </ul>
                    
                    <h2>Education</h2>
                        <ul>
                                <li>
                                    <h3><?php the_field('degree'); ?> from <?php the_field('institution_name'); ?></h3>
                                    <p><?php the_field('start_date'); ?> - <?php the_field('end_date'); ?></p>
                                    <p><?php the_field('description'); ?></p>
                                </li>
                        </ul>
                    
                    <h2>Skills</h2>
                        <ul>
                                <li><?php the_field('skill_name'); ?> - <?php the_field('skill_level'); ?></li>
                        </ul>
                    
                    <h2>Certifications</h2>
                        <ul>
                                <li>
                                    <h3><?php the_field('certification_name'); ?></h3>
                                    <p><?php the_field('issuing_organization'); ?> - <?php the_field('issue_date'); ?></p>
                                </li>
                        </ul>
                    
                    <h2>Projects</h2>
                        <ul>
                                <li>
                                    <h3><?php the_field('project_name'); ?></h3>
                                    <p><?php the_field('project_description'); ?></p>
                                    <a href="<?php the_field('project_link'); ?>" target="_blank">View Project</a>
                                </li>
                        </ul>
                    
                    <h2>Languages</h2>
                        <ul>
                                <li><?php the_field('language_name'); ?> - <?php the_field('proficiency_level'); ?></li>
                        </ul>
                    
                    <h2>Hobbies and Interests</h2>
                        <ul>
                                <li><?php the_field('hobby_name'); ?>: <?php the_field('hobby_description'); ?></li>
                        </ul>
                    
                    <h2>References</h2>
                        <ul>
                                <li>
                                    <h3><?php the_field('reference_name'); ?></h3>
                                    <p><?php the_field('reference_position'); ?></p>
                                    <p><?php the_field('reference_contact'); ?></p>
                                </li>
                        </ul>
                </article>
            </section>
        </div>
    </div><!-- container -->
</div><!-- container fluid -->
<?php get_footer(); ?>
