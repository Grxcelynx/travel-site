<?php 
/** 
 * Template Name: Contact 
 * 
 * @package TravelSite 
 * 
 */ 
?> 
<?php get_header(); ?>
<!-- This is the start of hero section -->

<div class="contact" id="topBtn">

<?php get_template_part('template-parts/info-section')?> 
<?php get_template_part('template-parts/pets')?> 
    <br>
    <section class="help">
        <div class="mainBodyDiv">
            <h1 class="title"> Already planned a trip and need some help?</h1>
            <div class="row">
            <div class="coloum">
            <p class="informationTitle"> Email Our 24hr Help </p>
            
            <p class="informationBody">   TravelToYourDreams@mail.com</p>
            </div>
            <div class="coloum">
            <p class="informationTitle">Call Support Center</p>
            <p class="informationBody">Open 9-5 Mon. - Sat. PT Time</p>
            <p class="informationBody">1(800)-123-3000</p>
        </div>

    </section>

    <div class="container">
        <div class="row header">
            <h1>CONTACT US &nbsp;</h1>
            <h3>Fill out the form below to learn more!</h3>
        </div>
        <div class="row body">
            <form action="#">
            <ul>
                
                <li>
                <p class="left">
                    <label for="first_name">first name</label>
                    <input type="text" name="first_name" placeholder="John" />
                </p>
                <p class="pull-right">
                    <label for="last_name">last name</label>
                    <input type="text" name="last_name" placeholder="Smith" />      
                </p>
                </li>
                
                <li>
                <p>
                    <label for="email">email <span class="req">*</span></label>
                    <input type="email" name="email" placeholder="john.smith@gmail.com" />
                </p>
                </li>        
                <li><div class="divider"></div></li>
                <li>
                <label for="comments">comments</label>
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
