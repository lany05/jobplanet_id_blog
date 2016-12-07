<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Jobplanet Blog
 * @since Jobplanet Blog 1.0
 */


if ( is_active_sidebar( 'popup_bottom_right' ) ) :
	if (!defined($_COOKIE["pop_state"]) && $_COOKIE["pop_state"] != "hidden" ) : ?>
	<div id="popup-sidebar" class="popup-sidebar widget-area" role="complementary">
		<div id="close_button" class="close_button">x</div>
		<?php dynamic_sidebar( 'popup_bottom_right' ); ?>
		<div class="footer-note">Informasi Anda selalu kami jaga kerahasiannya</div>
	</div><!-- #primary-sidebar -->
<?php endif; 
endif; ?>