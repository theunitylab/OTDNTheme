<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Unity_Lab_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

	</footer><!-- #colophon -->
<div class="small-12 medium-12 large-12 columns site-info">
 
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'OTDN-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'OTDN-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: OTDN Theme by %2$s.', 'the-unity-lab-theme' ), 'the-unity-lab-theme', '<a href="http://www.theunitylab.com" rel="designer">The Unity Lab</a>' ); ?>
		
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
