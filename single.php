<!-- This is a single page. It serves as a template for all other pages that come from a post -->
<!--blog post -->
<?php

get_header( 'single' );

?>

	<div id="row">
		<div id="col-md-3">

		<?php if ( have_posts() ) : while ( have_posts() ): the_post() ?>

		<h1 class="single-title"><?php the_title()?> </h1>
		<!-- <p><?php the_time( '1, F jS, Y' ); ?> </p> -->

		<p class="single-content">
			<?php the_content();
				
				// we look for comments only in the Blog Category
				if (in_category('Blog')):
					// we display comments
					wp_list_comments();
					//we display the comments template
					comments_template();
				else:

				endif;
			?>
		</p>
		<div class="divider"></div>
		<?php endwhile; else: ?>
			<p><?php _e( 'Sorry this page does not exist.' ); ?></p>
		<?php endif; ?>

		</div>
	</div>
<!-- Closes container from header -->
</div>
<?php
get_footer();
?>
