<!-- This is a single page. It serves as a template for all other pages that come from a post -->
<!--blog post -->
<?php

get_header( 'other' );

?>

	<div id="row">
		<div id="col-md-3">

		<?php if ( have_posts() ) : while ( have_posts() ): the_post() ?>

		<h1><?php the_title()?> </h1>
		<!-- <p><?php the_time( '1, F jS, Y' ); ?> </p> -->


		<?php the_content();
			if (in_category('Blog')):
				comment_form();
			else:

			endif;
		?>

		<?php endwhile; else: ?>
			<p><?php _e( 'Sorry this page does not exist.' ); ?></p>
		<?php endif; ?>

		</div>
	</div>
<?php
get_footer();
?>
