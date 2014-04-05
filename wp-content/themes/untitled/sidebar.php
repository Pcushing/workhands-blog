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
  <aside class="widget widget_categories">
    <h1 class="widget-title">Services</h1>
    <ul>
      <div class='menu'>
        <ul>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Blog</a>
          </li>
          <li><a href="https://www.workhands.us/jobs">Jobs</a></li>
          <li><a href="https://www.workhands.us/schools">Trade schools</a></li>
          <li><a href="https://www.workhands.us/apprenticeships">Apprenticeships</a></li>
          <li><a href="https://www.workhands.us/resumes">Resume help</span></a></li>
          <li>
        </ul>
      </div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
  <aside class="widget widget_categories" >
    <h1 class="widget-title">Write for WorkHands</h1>
    <p>We are looking for blue collar men and women to contribute reviews, opinions, stories, tips & tricks, and news pieces to the only blog created by and for blue collar workers.</p>
    <a href="mailto:blog@workhands.us">Email us at blog@workhands.us</a>
  </aside>
</div><!-- #secondary -->
<?php endif; ?>

