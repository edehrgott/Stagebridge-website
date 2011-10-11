<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
	
<div id="wrapper">
	<div id="main">
    <?php if (is_front_page()) : ?>	
		<div id="gallery">
			<a href="<?php echo $unw_slide1_url;?>" class="show">
		<img src="<?php echo $unw_image1_url;?>" alt="" width="630" height="300" title="" alt="" rel="<h3> <?php echo $unw_caption1_title;?> </h3> <?php echo $unw_slide1_caption;?> "/>
	</a>
	
	<a href="<?php echo $unw_slide2_url;?> ">
		<img src="<?php echo $unw_image2_url;?>" alt="" width="630" height="300" title="" alt="" rel="<h3><?php echo $unw_caption2_title;?> </h3> <?php echo $unw_slide2_caption;?> "/>
	</a>
	
	<a href="<?php echo $unw_slide3_url;?> ">
		<img src="<?php echo $unw_image3_url;?>" alt="" width="630" height="300" title="" alt="" rel="<h3> <?php echo $unw_caption3_title;?> </h3> <?php echo $unw_slide3_caption;?> "/>
	</a>

	<a href="<?php echo $unw_slide4_url;?> ">
		<img src="<?php echo $unw_image4_url;?>" alt="" width="630" height="300" title="" alt="" rel="<h3><?php echo $unw_caption4_title;?> </h3><?php echo $unw_slide4_caption;?> "/>
	</a>
	
	<div class="caption"><div class="content"></div></div>

		</div>
		<?php endif; ?>
		<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
		<div id="homecontent">
			
			<?php
			if (is_front_page()) {
				// display mini features for home page only
				//global $wp_query;
				$wp_query = new WP_Query("post_type=minifeature&post_status=publish");
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<div="minifeature">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php the_content(); ?>
					</div>
				<?php endwhile;
			} ?>
			
			<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
			 <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s','vivathemes'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>				
	<div id="audata"> <?php the_author_posts_link(); ?> <?php the_time(' F jS, Y') ?> <?php comments_popup_link(__('No Comments','vivathemes'), __('1 Comment','vivathemes'), __('% Comments','vivathemes')); ?> </div>

				<div class="entry">				
					<div class="post-thumbnail"><?php	if ( has_post_thumbnail() )	the_post_thumbnail( 'thumbnail' ); ?></div>
					<?php the_excerpt(__('read more...','vivathemes')) ?>
					<a class="more-link" href="<?php the_permalink() ?>" > <?php printf(__('read more...','vivathemes')) ; ?></a>
				</div>

			<div class="postmetadata"> <?php printf(__('Posted in: %s','vivathemes'), get_the_category_list(', ')); ?> <?php edit_post_link(__('Edit','vivathemes'), '', '  '); ?>  </div>

			</div>

		<?php endwhile; ?>

		<?php include('wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>


	<?php else : ?>

		
		<p class="center"><?php _e('You don\'t have any posts yet.','vivathemes'); ?></p>
		

	<?php endif; ?>
	</div>

	</div>
	<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
</div>
</div>
<div class="clear"> </div>
<?php get_footer(); ?>
