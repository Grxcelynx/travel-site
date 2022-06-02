<?php 
/** 
 * Template Name: Homepage 
 * 
 * @package TravelSite 
 * 
 */ 
?> 
<div class="" id="topBtn"> </div>

<?php get_header(); ?>

   <!-- This is the start of hero section -->
   <main id="" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php the_field('homepage_background_banner_image'); ?>); 
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;">
        <div class="hero-text">
            <h1>
                <?php the_field('page_title'); ?>
            </h1>
            <p>
                <?php the_field('hero_text'); ?>
            </p>
        </div>
    </main>
    <!-- This is the end of hero section --> 

        <!-- This is the start of icon section -->
        <section class="row">
        <div class="column">
            <img src="<?php the_field('icon_1'); ?>" alt="pink globe icon.">
            <h2><?php the_field('icon_1_title'); ?></h2>
            <p>
            <?php the_field('icon_1_text'); ?>
            </p>
        </div>
        <div class="column">
            <img src="<?php the_field('icon_2'); ?>" alt="pink globe icon.">
            <h2><?php the_field('icon_2_title'); ?></h2>
            <p>
            <?php the_field('icon_3_text'); ?>
            </p>
        </div>
        <div class="column">
            <img src="<?php the_field('icon_3'); ?>" alt="pink globe icon.">
            <h2><?php the_field('icon_3_title'); ?></h2>
            <p>
            <?php the_field('icon_3_text'); ?>
            </p>
        </div>
    </section>
    <!-- This is the end of icon section -->

    <?php get_template_part('template-parts/info-section')?> 

    <?php get_template_part('template-parts/banner')?> 

    <?php get_template_part('template-parts/top-btn')?> 


    <?php get_footer(); ?>

