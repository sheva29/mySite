<?php
/*Enable functions such as sidebars */

register_sidebar( array(
		'name' => __( '1st Right Side Bar' ),
		'id' => 'first-right-sidebar',
		'description' => 'This is just a test',


	) );

register_sidebar( array(
		'name' => __( '2nd Right Side Bar' ),
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

//Custom Functions

//Adds JS scripts to the Head
function mauricio_bootstrap_scripts() {
	// Adds the new bootstrap function to the wp_enqueue_scripts
	wp_register_script( 'custom-script', get_template_directory_uri() . '/mauricio_bootstrap/js/bootstrap.js', array( 'jquery' ) );
	wp_enqueue_script( 'custom-script' );

	// Add functions for the header transition
	wp_register_script( 'custom-script2', get_template_directory_uri() . '/mauricio_bootstrap/js/custom.js', array( 'jquery' ) );
	wp_enqueue_script( 'custom-script2' );

	//Header transitions. Taken from BIG BANG
	wp_register_script( 'header-script', get_template_directory_uri(). '/mauricio_bootstrap/js/header.js', array( 'jquery') , 'version',  false  );
	wp_enqueue_script( 'header-script' );

	//Add my own script to fix a glitch
	wp_register_script( 'to_fix_bugs', get_template_directory_uri(). '/mauricio_bootstrap/js/bootstrap-fixes.js', array( 'jquery' ), 'version', true );
	wp_enqueue_script( 'to_fix_bugs' );

}


add_action( 'wp_enqueue_scripts', 'mauricio_bootstrap_scripts' );


//Adds WebFont Link in the Head

function open_sans_font(){

	echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>";
}

add_action( 'genesis_meta', 'open_sans_font', 5 );

//Getting rid of the extra stuff that users don't need to see on the head
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link' );


//Enables to post thumbnails in your posts and control size
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 250, 200, true );

}

//Disables wordpress of adding <p> tags at the end of the content - Used for the bootstrap carousel
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );






?>
