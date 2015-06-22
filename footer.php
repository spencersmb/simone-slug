<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Simone4
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
<!--    //calling get_sidebar automatically adds sidebar to the name so we just need to call anything after the dash-->
    <?php get_sidebar('footer') ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'simone-slug' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'simone-slug' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'simone-slug' ), 'Simone4', '<a href="http://spencerbigum.com" rel="designer">Spencer Bigum</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
