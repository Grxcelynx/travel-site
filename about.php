<?php 
/** 
 * Template Name: About 
 * 
 * @package TravelSite 
 * 
 */ 
?> 
<div class="" id="topBtn"> </div>

<?php get_header(); ?>

<section class="about-banner" style="background: url(<?php the_field('banner_background_image_'); ?>); background-repeat: no-repeat; background-size: cover;">
    <h1><?php the_field('page_title'); ?></h1>
    <h3><?php the_field('page_subtitle'); ?></h3>
</section>

    <section class="section-1">
        <div class="who">
            <h2><?php the_field('section_1_title'); ?></h2>
            <p>
                <?php the_field('section_1_text'); ?>
            </p>
        </div>
    </section>

    <section class="section-2">
        <div class="mission">
        <h2><?php the_field('section_2_title'); ?></h2>
        <p>
            <?php the_field('section_2_text'); ?>
        </p>
        </div>
    </section>
</div>


    <?php get_template_part('template-parts/banner')?> 
    <?php get_template_part('template-parts/top-btn')?> 

    <?php get_footer(); ?>

