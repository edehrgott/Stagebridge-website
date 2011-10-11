<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/facebox.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/pagenavi.css" />

<!--[if IE 6]>	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie6.css" />
<![endif]-->	

<style type="text/css" media="screen"> </style>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.js"></script>

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/superfish.js"></script>

<script type="text/javascript">
jQuery(function(){
jQuery('ul.superfish').superfish();
});
</script>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/facebox.js"></script>

<script type="text/javascript">
    jQuery(function(){
      jQuery('a[rel*=facebox]').facebox(); 
    });
</script>

<?php if (is_front_page()) : ?>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/slideshow.js"></script>
<script type="text/javascript"> 
jQuery(function() {	
	//Execute the slideShow
	slideShow();
});
</script>
<?php endif; ?>

</head>
<body>
<div id="container">
<?php
global $options;
foreach ($options as $value) {
if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
<div id="header">
	<div id="headtop">
		<div id="headtopin">
			<div id="topmenu"> 
				<?php if ( has_nav_menu( 'top-menu' ) ) { ?>
        		<?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_class' => 'topnav superfish'  ) ); ?>
    			<?php } ?>
        	</div>
			<div id="topright"> 		
		
		<?php if ($unw_login_disable == "No") { ?>
		<?php if (is_user_logged_in()) { ?>					
		<a href="<?php echo wp_logout_url().'&amp;action=logout&amp;redirect_to='.$_SERVER['REQUEST_URI']; ?>"><?php _e('logout','vivathemes'); ?></a>
		<?php } else { ?>
		<a href="#loginform" rel="facebox" ><?php _e('login/register','vivathemes'); ?> </a>
		<?php } ?>
		<?php } ?>
		<div id="loginform" style="display:none;">
				<?php
  					global $user_ID, $user_identity;
  					get_currentuserinfo();
  					if (!$user_ID):
				?>
  				<h2><?php _e('Login'); ?></h2>
    				<form name="loginform" id="loginform" action="<?php echo get_settings('siteurl'); ?>/wp-login.php" method="post">
    				<div class="loginform"><label><?php _e('Username') ?>:<br /><input type="text" name="log" id="log" value="" size="20" tabindex="7" /></label><br />
    				<label><?php _e('Password') ?>:<br /> <input type="password" name="pwd" id="pwd" value="" size="20" tabindex="8" /></label><br />
    				<div width:200px; float:left;"><input type="submit" name="submit" id="btn" value="<?php _e('Login'); ?> " tabindex="9" />
    				<div style="width:50px;float:left; padding-top:6px;"><?php wp_register('', ''); ?> </div></div>
    				<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/> </div>
    				</form>
				
				<?php else: ?>
  				<h2><?php echo $user_identity; ?></h2>
    				<ul>
    				<?php wp_register(); ?>
    				<li> <a href="<?php echo wp_logout_url().'&amp;action=logout&amp;redirect_to='.$_SERVER['REQUEST_URI']; ?>">Logout</a> </li>
    				</ul>
				<?php endif; ?>
		
          		</div>
<div style="width:900px;">
		
 <a href="<?php echo $unw_rss_url;?>"><img src="<?php echo get_site_url(); ?>/assets/icon_youtube.gif"></a>
		<a href="<?php echo $unw_twitter_account;?>"><img src="<?php echo get_site_url(); ?>/assets/icon_facebook.gif"></a>

<?php if ($unw_search_disable == "No") { ?>
		<?php include (TEMPLATEPATH."/searchform.php");?> 
 		<?php } ?>

<?php if( (is_front_page()) ) {  // for home page only ?>
<div id="donate-button">
<a href="https://www.networkforgood.org/donation/ExpressDonation.aspx?ORGID2=942894993">
<img src="/assets/donatenowlogo3.gif" /></a>
</div>
<?php } ?>


	</div>	
	</div>
	</div>	
	</div>

	<div id="headin">

		<?php if ($unw_logo_disable == "No") { ?>
		<div id="logo"> <a href="<?php if (function_exists('icl_get_home_url')) echo icl_get_home_url(); else bloginfo('url'); ?>"> <img src="<?php echo $unw_logo_image;?>" alt="logo" /> </a> 
		<h2><?php bloginfo('description'); ?></h2> 
		</div>
		<?php	} else { ?>
		<div id="logo"><h1><a href="<?php if (function_exists('icl_get_home_url')) echo icl_get_home_url(); else bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1></div>	
		<?php } ?>



	  
		<div id="menudiv">		
			<div id="mainmenu">
			 	<?php if ( has_nav_menu( 'main-menu' ) ) { ?>
			 	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'mainnav superfish' ) ); ?>			  
				<?php } ?>
			</div>
</div> 
</div> 
</div>
