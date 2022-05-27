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
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'travel-site' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'travel-site' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'travel-site' ), 'travel-site', '<a href="http://Grxcelyn">Grxcelyn</a>' );
				?>
		</div><!-- .site-info -->
        
    <!-- This is the start of footer -->
    <footer>
        <div class="footerBox">
            <ul>
                <a href="/index.html"><li>Home</li></a>
                <a href="/about.html"><li>About</li></a>
                <a href="/contact.html"><li>Contact</li></a>
            </ul>

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

<?php wp_footer(); ?>


</body>
</html>
