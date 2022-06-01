<section class="flights-hotels">
    <div class="flights" style="background-image: url(<?php the_field('flight_image'); ?>); background-size: cover; background-position: center;">
        <h2 id="flight-title"><?php the_field('flight_title'); ?></h2>
        <h4 id="flight-subtitle"><?php the_field('flight_subtitle'); ?></h4>
        <img src="" alt="">
        <button id="flight-btn"><?php the_field('flight_button'); ?></button>
    </div>

    <div class="hotels" style="background-image: url(<?php the_field('hotel_image'); ?>); background-size: cover; background-position: center;">
        <h2 id="hotel-title"><?php the_field('hotel_title'); ?></h2>
        <h4 id="hotel-subtitle"><?php the_field('hotel_subtitle'); ?></h4>
        <img src="" alt="">
        <button id="hotel-btn"><?php the_field('hotel_button'); ?></button>
    </div>
</section>