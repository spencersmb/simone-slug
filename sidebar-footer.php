<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @package Simone4
 */

//if sidebar 2 is not active stop
if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="supplementary">
  <div id="footer-widgets" class="footer-widgets widget-area clear" role="complementary">
	  <?php dynamic_sidebar( 'sidebar-2' ); ?>
  </div>
</div><!-- #supplementary -->
