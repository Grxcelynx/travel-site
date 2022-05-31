<?php 
/** 
 * Template Name: Travel Buddies 
 * 
 * @package TravelSite 
 * 
 */ 
?> 
<div class="" id="topBtn"> </div>

<?php get_header(); ?>
<!-- <?php get_template_part('template-parts/pets'); ?> -->

<section class="travel-bud-banner">
    <div>
        <h1><?php the_field('page_title'); ?> <i style="font-size:55px" class="fa">&#xf1b0;</i> </h1>
        <h3>
        <?php the_field('page_subtitle'); ?> 
            <br> 
            <?php the_field('buddy_subtitle_info'); ?> 
        </h3>
        <p>
        <?php the_field('buddy_info_excerpt'); ?> 

        </p>
    </div>
</section>

<?php get_template_part('template-parts/flights-hotels'); ?> 


<?php get_template_part('template-parts/banner'); ?> 
<?php get_template_part('template-parts/top-btn')?> 
<?php get_footer(); ?>

