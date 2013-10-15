<!-- Always use the prefix page_'pagename'.php when adding a custom page to your wordpress -->
<?php
//Use this to add a custom page
/* Template name: Blog */

?>

<?php

$arg = 'category_name=Blog';
$category_posts = new WP_Query( $arg );

if ( is_page( 'Home' ) ) {
	get_header( 'home' );
} elseif ( is_page( 'About' ) ) {
	get_header( 'about' );
} elseif ( is_page( 'Contact' ) ) {
	get_header( 'contact' );
} elseif (  is_page( 'Work' ) ) {
	get_header( 'work' );
} else {
	get_header();
}

?>

	<div id="row">


		<?php if ( $category_posts->have_posts() ) :
	while ( $category_posts->have_posts() ):
		echo'<div id="span4">';
	$category_posts->the_post() ?>

					<h2><a href="<?php the_permalink(); ?>"> <?php the_title()?> </a></h2>
					<p> <?php the_time( '1, F jS, Y' );?> </p>

					<!--<?php the_content();?>-->


					<?php endwhile; else: ?>
					<p><?php _e( 'Sorry this page does not exist.' ); ?></p>
					</div>
		<?php endif; ?>


		<div id="span4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php
get_footer();
?>
