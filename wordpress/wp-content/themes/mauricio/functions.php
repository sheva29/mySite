<?php
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
add_action('wp_footer', 'script_on_footer');
add_action( 'wp_enqueue_scripts', 'isotopeJS');

//Adds WebFont Link in the Head

function open_sans_font() {

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

//Custom size of our thumb ** height to determine the max size of the image
add_image_size("custom_thumb", 250, 173);// Use custom image when setting the_post_thumbnail()

//Disables wordpress of adding <p> tags at the end of the content - Used for the bootstrap carousel
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );



?>
