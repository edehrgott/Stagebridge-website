<?php get_header(); ?>
<div id="wrapper">
<div id="main">

	<?php get_sidebar(); ?>

	<div class="post" id="post-<?php the_ID(); ?>">
		<h3><?php _e('Not Found', 'stagebridge'); ?></h3>
	
		<div class="entry">
			<p><?php _e('Whoops! Whatever you are looking for cannot be found.', 'stagebridge'); ?></p>
			<p><?php _e('There\'s a handy search tool toward the top right of the page to help find what you were looking for.', 'stagebridge') ?></p>
		</div>
		<?php comments_template(); ?>
	</div>
	
	</div>


</div>
<?php get_footer(); ?>
