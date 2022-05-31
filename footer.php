<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TravelSite
 */

?>

<footer id="colophon" class="site-footer">
        
    <!-- This is the start of footer -->
    <footer>
        <div class="footerBox">
        <?php
            wp_nav_menu(array(
                'menu' => 'Nav Menu',
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-menu',
                'menu_id' => 'footer-id'
            ))
        ?>

        </div>
        <div class="footerBox">
            <p>&copy; W4B Neptali Montez</p>
        </div>
        <div class="footerBox">
            <div class="socialMedia">
                <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>
                <a href="https://twitter.com/i/flow/login" target="_blank"><i class="fa-brands fa-twitter-square fa-2x"></i></a>
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-square fa-2x"></i></a>
            </div>
        </div>
    </footer>
    <!-- This is the end of footer -->
</footer><!-- #colophon -->



</body>
</html>
