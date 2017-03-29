<div id="sidebar-box">
	<?php if ( is_active_sidebar( 'after-post' ) ) : ?>
		<div class="after-post-widget" role="complementary">
		<?php dynamic_sidebar( 'after-post' ); ?>
		</div>
	<?php endif; ?>
</div>
