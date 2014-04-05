<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package untitled
 */
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
  <aside class="widget widget_categories" >
    <h1 class="widget-title">Who we are</h1>
    <p>WorkHands is the free, nationwide network built exclusively for workers in the skilled trades</p>
    <a href="http://workhands.us" class="sidebar-button">Get started</a>
  </aside>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
<?php endif;

