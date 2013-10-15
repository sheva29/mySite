<!-- This is a single page. It serves as a template for all other pages that are included in my header: contact, about, -->
<?php

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
		<div id="span4">

		<?php if ( have_posts() ) : while ( have_posts() ): the_post() ?>

		<h1><?php the_title()?> </h1>
		<?php the_content();?>


		<?php endwhile; else: ?>
			<p><?php _e( 'Sorry this page does not exist.' ); ?></p>
		<?php endif; ?>

		</div>
		<div id="span4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php
get_footer();
?>
