<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<?php astra_content_bottom(); ?>
	</div>
	</div>
<?php
	astra_content_after();

?>
<footer id="site-footer">
	<div class="footer-bar">
		<div class="footer-left">
			<a href="/privacy-policy" class="footer-button">Privacy Policy</a>
		</div>
		<div class="footer-center">
			<p>&copy; <?php echo date('Y'); ?> Lamborghini. Todos los derechos reservados.</p>
		</div>
		<div class="footer-right">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>assets/icons/ig.webp" alt="Instagram" class="footer-icon"></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>assets/icons/x.png" alt="X" class="footer-icon"></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>assets/icons/fb.png" alt="Facebook" class="footer-icon"></a>
		</div>
	</div>
</footer>


</div>

<?php
	astra_body_bottom();
	wp_footer();
?>
</body>
</html>
