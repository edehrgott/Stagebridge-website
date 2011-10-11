<div id="sidebar">
	<div id="sdbin">
		<?php
		// show proper sidebar menu
		global $wp_query;
		$post_id = $wp_query->post->ID;
		$sidebar_menu = get_post_meta($post_id, "sidebarmenu", true);
		$sidebar_menu = strtolower($sidebar_menu);  // case isn't important � force to lower
		// add appropriate sidebar menu
		if ($sidebar_menu == 'about' ) { ?>
			<div id="nav-menu" class="widgets">
			<h2 id="sidebar-<?php echo $sidebar_menu ?>"><a href="/wordpress/about"><div id="sidebar-title">About</div></a></h2>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order',
						 'menu' => 'About Menu'));  ?>

                        </div>
                     <?php 
		} 
		elseif ($sidebar_menu == 'see' ) { ?>
			<div id="nav-menu-<?php echo $sidebar_menu ?>" class="widgets">
			<h2 id="sidebar-<?php echo $sidebar_menu ?>"><a href="/wordpress/see"><span>See</span></a></h2>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order',
						 'menu' => 'See Menu')); ?>
                        </div>
                      <?php 
		}
		elseif ($sidebar_menu == 'play' ) { ?>
			<div id="nav-menu" class="widgets">
			<h2 id="sidebar-<?php echo $sidebar_menu ?>"><a href="/wordpress/play">Play!</a></h2>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order',
						 'menu' => 'Play Menu'));  ?>
                        </div>
                       <?php 
		}
		elseif ($sidebar_menu == 'learn' ) { ?>
			<div id="nav-menu" class="widgets">
			<h2 id="sidebar-<?php echo $sidebar_menu ?>"><a href="/wordpress/learn"><span>Learn</span></a></h2>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order',
						 'menu' => 'Learn Menu'));  ?>
                         </div>
                        <?php 
		}
		elseif ($sidebar_menu == 'transform' ) { ?>
			<div id="nav-menu" class="widgets">
			<h2 id="sidebar-<?php echo $sidebar_menu ?>"><a href="/wordpress/transform"><span>Transform</span></a></h2>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order',
						 'menu' => 'Transform Menu'));  ?>
                        </div>
                       <?php 
		}
		elseif ($sidebar_menu == 'community programs' ) { ?>
			<div id="nav-menu" class="widgets">
			<h2 id="sidebar-<?php echo $sidebar_menu ?>"><a href="/wordpress/community_programs"><span>Community Programs</span></a></h2>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order',
						 'menu' => 'Community Programs Menu'));  ?>
                        </div>
                        <?php 
		}
                elseif ($sidebar_menu == 'resources' ) { ?>
			<div id="nav-menu" class="widgets">
			<h2 id="sidebar-<?php echo $sidebar_menu ?>"><a href="/wordpress/resources"><span>Resources</span></a></h2>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order',
						 'menu' => 'Resources Menu'));  ?>
                        </div>
                     <?php 
		} 
                elseif ($sidebar_menu == 'contact' ) { ?>
			<div id="nav-menu" class="widgets">
			<h2 id="sidebar-<?php echo $sidebar_menu ?>"><a href="/wordpress/contact"><span>Contact</span></a></h2>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order',
						 'menu' => 'Contact Menu'));  ?>
                        </div>
                        <?php 
		} 
 ?>
	
	</div>

	<?php
	if ( function_exists('dynamic_sidebar') && dynamic_sidebar(rightbar) ) : else : 
	endif; ?>

	<a href="https://www.networkforgood.org/donate/process/expressDonation.aspx?ORGID2=%2094-2894993">
	<img class="aligncenter" src="/assets/network-for-good.gif" alt="" width="167" height="53" border="0" /></a>
</div>

