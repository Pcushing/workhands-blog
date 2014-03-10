<?php
/**
 * @package untitled
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( '' != get_the_post_thumbnail() ) : ?>

		<div class="single-thumbnail genericon genericon-link">
			<a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php the_post_thumbnail( 'content-img' ); ?>
			</a>
		</div><!-- .single-thumbnail -->
		<div class="header-wrapper">
			<header class="entry-header">
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			</header><!-- .entry-header -->
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php untitled_posted_on(); ?>
				<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<?php endif; ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div><!-- .header-wrapper -->

	<?php else : ?>

		<header class="entry-header">
			
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
		</header><!-- .entry-header -->
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php the_date('m/j/Y') ?> by
			<a href="<?php the_author_meta('user_url') ?>" target="_blank"><?php the_author(); ?></a> 
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'untitled' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'untitled' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

	<?php endif; ?>
</article><!-- #post-## -->
