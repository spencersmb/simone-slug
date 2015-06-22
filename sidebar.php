<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Simone4
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
  <!--  //call the side bar-->
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
