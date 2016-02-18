<?php
/* Add this when the domain is set and redirecting*/
update_option( 'siteurl', 'http://www.sanchezmauricio.com' );
update_option( 'home', 'http://www.sanchezmauricio.com' );
add_theme_support('post-thumbnails');// to enable editing the featured image in posts

/*Enable functions such as sidebars */
add_action( 'widgets_init', 'addSideBars' );
function addSideBars(){

	register_sidebar( array(

			'name' => __( 'Project Categories' ),
			'id' => 'project-sidebar',
			'description' => 'Categories for projects within the Main page',
			'before_title' => '<h3 class="project-sidebar-title">',
			'after_title' => '</h3>',
			'before_widget' => '<li id="project-sidebar">'
			// 'after_title' => '<li id="all" href="http://localhost" > All </li>'
		) );

	register_sidebar( array(

			'name' => __( 'side_bar_2' ),
			'id' => 'second-right-sidebar',
			'description' => 'This is just a 2nd test',
		) );

	if ( function_exists( 'register_sidebar' ) )
		register_sidebar( array(

				'before_widget' => ' ',
				'after_widget' => ' ',
				'before_title' => '<h3>',
				'after_title' => '</h3>',

			) );

}

//Custom Functions

//Adds JS scripts to the Head
function mauricio_bootstrap_scripts() {
	// Adds the new bootstrap function to the wp_enqueue_scripts
	wp_register_script( 'custom-script', get_template_directory_uri() . '/mauricio_bootstrap/js/bootstrap.js', array( 'jquery' ), 'version', false );
	wp_enqueue_script( 'custom-script' );

	// Add functions for the header transition
	// wp_register_script( 'custom-script2', get_template_directory_uri() . '/mauricio_bootstrap/js/custom.js', array( 'jquery' ) );
	// wp_enqueue_script( 'custom-script2' );

	//Header transitions. Taken from BIG BANG
	// wp_register_script( 'header-script', get_template_directory_uri(). '/mauricio_bootstrap/js/header.js', array( 'jquery') , 'version',  false  );
	// wp_enqueue_script( 'header-script' );

	//My custom JS to manipulate the DOM
	// wp_register_script('personal-script', get_template_directory_uri(). '/mauricio_bootstrap/js/main.js', array('jquery'), 'version', false);
	// wp_enqueue_script('personal-script');

	//Add my own script to fix a glitch
	// wp_register_script( 'to_fix_bugs', get_template_directory_uri(). '/mauricio_bootstrap/js/bootstrap-fixes.js', array( 'jquery' ), 'version', false );
	// wp_enqueue_script( 'to_fix_bugs' );
}

function isotopeJS(){

	wp_register_script('grid-script', 'http://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.js', array('jquery'), 'version', false);
	wp_enqueue_script('grid-script');
}

function script_on_footer(){

	//we pass the link from the server. This way we keep it updated.
	wp_register_script('personal-script', get_template_directory_uri(). '/mauricio_bootstrap/js/main.js', array('jquery'), 'version', true);
	wp_enqueue_script('personal-script');

}


add_action( 'wp_enqueue_scripts', 'mauricio_bootstrap_scripts' );
add_action('wp_head', 'script_on_footer');
add_action( 'wp_enqueue_scripts', 'isotopeJS');

//Adds WebFont Link in the Head

function open_sans_font() {

	echo "<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600,300italic,400italic,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>";
}

add_action( 'genesis_meta', 'open_sans_font', 5 );

// Adding mobile metag
function mobileMetaTag () {
	
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
	// Use this if you want to turn off zooming - it will look more like a native app, could be dangerous
	// echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">';
}

add_action ( 'wp_head', 'mobileMetaTag');

//Getting rid of the extra stuff that users don't need to see on the head
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link' );

//Custom size of our thumb ** height to determine the max size of the image
add_image_size("custom_thumb", 250, 160);// Use custom image when setting the_post_thumbnail()

//Disables wordpress of adding <p> tags at the end of the content - Used for the bootstrap carousel
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/**
 * Enables SVG files to be uploaded
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/* Modify the read more link on the_excerpt() */


function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function rw_trim_excerpt( $text='' )
{
	// global $post;
    $text = strip_shortcodes( $text );//this removes shortcodes coming in the text
    $text = apply_filters('the_content', $text);// this passes any text as the content
    $text = str_replace(']]>', ']]&gt;', $text);
    $excerpt_length = apply_filters('excerpt_length', 55);
    // $excerpt_more = apply_filters('excerpt_more', ' ' . '<a href="'. get_permalink($post->ID) . '">Read All ...</a>');
    $excerpt_more = apply_filters('excerpt_more', '...');
    return wp_trim_words( $text, $excerpt_length, $excerpt_more );
}
add_filter('wp_trim_excerpt', 'rw_trim_excerpt');


?>
