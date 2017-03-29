<?php
/**
 * The template for displaying all single posts.
 *
 * @package Write
 */

get_header(); ?>
	<div id="main-box">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'content', 'single' ); ?>
	
			<?php endwhile; // end of the loop. ?>
	
			</main>
		</div><!-- #primary -->
		
	
		<?php if ( comments_open() || '0' != get_comments_number() ) : ?>
			<?php comments_template(); ?>
		<?php endif; ?>
	</div><!-- #main-box -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>