<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package krategus
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-grid">
				<?php
					dynamic_sidebar( 'footer-1' );
				?>
			</div>
		</div>		
	</footer><!-- #colophon -->

	<div class="copyright">
		<div class="container">
			<div class="copyright-content">
				<div>Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url');?>" class="copyright__link"><?php bloginfo('name');?></a></div>
				<div>Vytvořeno v <a href="https://eline.cz" class="copyright__link"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-eline.svg' ); ?>" width="54" height="22" alt="eline.cz"></a></div>
			</div>
		</div>
	</div>


<?php wp_footer(); ?>

</body>
</html>
