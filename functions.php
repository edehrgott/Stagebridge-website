<?php
/* functions.php
* added by Taproot for Stagebridge custom functions
*
*/

// add custom post type for mini features on home page
function sb_create_mini_feature() {
   register_post_type('Mini Feature', array('label' => __('Mini Feature'),
                                            'public' => true, 'show_ui' => true));
   register_taxonomy_for_object_type('post_tag', 'Mini Feature');
}

   add_action('init', 'sb_create_mini_feature');
   
   // enable custom menus
   add_theme_support( 'menus' );


add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}   

add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );

function my_mce_before_init( $settings ) {

/*    	array(
    		'title' => 'H1',
		'block' => 'div',
    		'selector' => 'a',
    		'classes' => 'button'
    	),
*/
    $style_formats = array(
        array(
        	'title' => 'SB Quote',
        	'block' => 'div',
        	'classes' => 'quote',
        	'wrapper' => true
        ),
        array(
        	'title' => 'SB Author',
        	'block' => 'span',
        	'classes' => 'author',
        	'wrapper' => true
        ),
        array(
        	'title' => 'SB Center Image',
        	'selector' => 'img',
        	'classes' => 'sbimg',
        ),
    	array(
    		'title' => 'H1',
		'block' => 'h1'
    	),
    	array(
    		'title' => 'H2',
		'block' => 'h2'
    	),
    	array(
    		'title' => 'H3',
		'block' => 'h3'
    	),
    	array(
    		'title' => 'H4',
		'block' => 'h4'
    	),
    	array(
    		'title' => 'H5',
		'block' => 'h5'
    	),
    	array(
    		'title' => 'H6',
		'block' => 'h6'
    	)
    );

  
    // $settings['style_formats'] .= ',' . json_encode( $style_formats );
    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;
}

function sb_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/sb_wp_login.png) !important; }
    </style>';
}

add_action('login_head', 'sb_custom_login_logo');

?>