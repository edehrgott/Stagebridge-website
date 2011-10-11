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
		<img src="<?php echo $unw_image1_url;?>" alt="" width="900" height="300" title="" alt="" rel="<h3> <?php echo $unw_caption1_title;?> </h3> <?php echo $unw_slide1_caption;?> "/>
	</a>
	
	<a href="<?php echo $unw_slide2_url;?> ">
		<img src="<?php echo $unw_image2_url;?>" alt="" width="900" height="300" title="" alt="" rel="<h3><?php echo $unw_caption2_title;?> </h3> <?php echo $unw_slide2_caption;?> "/>
	</a>
	
	<a href="<?php echo $unw_slide3_url;?> ">
		<img src="<?php echo $unw_image3_url;?>" alt="" width="900" height="300" title="" alt="" rel="<h3> <?php echo $unw_caption3_title;?> </h3> <?php echo $unw_slide3_caption;?> "/>
	</a>

	<a href="<?php echo $unw_slide4_url;?> ">
		<img src="<?php echo $unw_image4_url;?>" alt="" width="900" height="300" title="" alt="" rel="<h3><?php echo $unw_caption4_title;?> </h3><?php echo $unw_slide4_caption;?> "/>
	</a>

	<a href="<?php echo $unw_slide5_url;?> ">
		<img src="<?php echo $unw_image5_url;?>" alt="" width="900" height="300" title="" alt="" rel="<h3><?php echo $unw_caption5_title;?> </h3><?php echo $unw_slide5_caption;?> "/>
	</a>
	
	<div class="caption"><div class="content"></div></div>

		</div>
		<?php endif; ?>
		<?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
		<div id="homecontent">
			
			<?php
			if (is_front_page()) { ?>
				<div id="minifeature">
				<?php
				// display mini features for home page only
				//global $wp_query;
				$cnt = 0;
				$wp_query = new WP_Query("post_type=minifeature&post_status=publish");
				while ($wp_query->have_posts()) : $wp_query->the_post(); 
					$cnt++;
					?>
					<div id="minifeature_item<?php echo $cnt; ?>" class="minifeature_item">
						<h1><?php the_title(); ?><a href="<?php the_permalink(); ?>"></a></h1><div id="minifeature_content">
						<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; ?>
				</div>
				<?php } ?>
			

		<?php include(TEMPLATEPATH . '/wp-pagenavi.php'); if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

	</div>

	</div>

</div>
</div>
<div class="clear"> </div>
<?php get_footer(); ?>
