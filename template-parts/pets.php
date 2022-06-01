<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="petTravel">
    <div class="pet-info">
        <img src="<?php the_field('pet_banner_image'); ?>" alt="" >

    </div>

    <div class="pet-info petText">
        <h1><?php the_field('pet_banner_title'); ?>
        <i style="font-size:35px" class="fa">&#xf1b0;</i>
        </h1>
        <h3><?php the_field('pet_banner_subtitle'); ?> <br> <?php the_field('pet_banner_subtitle_2'); ?></h3>
        <p>
            <?php the_field('pet_banner_text'); ?>
        </p>
        <button>
            <?php the_field('pet_banner_button'); ?>
        </button>
    </div>

</section>

