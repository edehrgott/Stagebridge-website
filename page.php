<?php get_header(); ?>
<div id="wrapper">
	<div id="main">
		<?php if (is_front_page()) : ?>
		<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
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
	<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
	<div id="homecontent">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">'.__('Read the rest of this page &raquo;','vivathemes').'</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','vivathemes').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link(__('Edit this entry.','vivathemes'), '<p>', '</p>'); ?>
	</div>

	<?php endif; ?>
	<?php if (!(is_front_page())) :	
		get_sidebar();
	
		if (have_posts()) : while (have_posts()) : the_post(); 
		
		// show proper color coding based on side menu
		global $wp_query;
		$post_id = $wp_query->post->ID;
		$sidebar_menu = get_post_meta($post_id, "sidebarmenu", true);
		$sidebar_menu = strtolower($sidebar_menu);  // case isn't important � force to lower
			?>
		<div class="post  post-<?php echo $sidebar_menu;?>" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">'.__('Read the rest of this page &raquo;','vivathemes').'</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','vivathemes').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link(__('Edit this entry.','vivathemes'), '<p>', '</p>'); ?>
	<?php endif; ?>
	</div>
	
</div>
<?php get_footer(); ?>