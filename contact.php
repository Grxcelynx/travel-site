<?php 
/** 
 * Template Name: Contact 
 * 
 * @package TravelSite 
 * 
 */ 
?> 
<div class="" id="topBtn"> </div>

<?php get_header(); ?>
<!-- This is the start of hero section -->


<?php get_template_part('template-parts/info-section')?> 
<?php get_template_part('template-parts/pets')?> 
    <br>
    <section class="help">
        <div class="mainBodyDiv">
            <h1 class="title"> <?php the_field('section_title'); ?> </h1>
            <div class="row">
            <div class="coloum">
            <p class="informationTitle"> <?php the_field('subtitle_1'); ?> </p>
            
            <p class="informationBody">  <?php the_field('info_text_1'); ?> </p>
            </div>
            <div class="coloum">
            <p class="informationTitle"><?php the_field('subtitle_2'); ?></p>
            <p class="informationBody"><?php the_field('info_text_2'); ?></p>
            <p class="informationBody"><?php the_field('info_text_3'); ?></p>
        </div>

    </section>

    <div class="container">
        <div class="row header">
            <h1><?php the_field('form_title'); ?> &nbsp;</h1>
            <h3><?php the_field('form_subtitle'); ?></h3>
        </div>
        <div class="row body">
            <form action="#">
            <ul>
                
                <li>
                <p class="left">
                    <label for="first_name"><?php the_field('input_1'); ?></label>
                    <input type="text" name="first_name" placeholder="John" />
                </p>
                <p class="pull-right">
                    <label for="last_name"><?php the_field('input_2'); ?></label>
                    <input type="text" name="last_name" placeholder="Smith" />      
                </p>
                </li>
                
                <li>
                <p>
                    <label for="email"><?php the_field('input_3'); ?> <span class="req">*</span></label>
                    <input type="email" name="email" placeholder="john.smith@gmail.com" />
                </p>
                </li>        
                <li><div class="divider"></div></li>
                <li>
                <label for="comments"><?php the_field('input_4'); ?></label>
                <textarea cols="46" rows="3" name="comments"></textarea>
                </li>
                
                <li>
                <input class="btn btn-submit" type="submit" value="Submit" />
                <small>or press <strong>enter</strong></small>
                </li>
                
            </ul>
            </form>  
        </div>
    </div>
</div>
<?php get_template_part('template-parts/top-btn')?> 

<?php get_footer(); ?>
