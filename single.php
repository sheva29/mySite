<!-- This is a single page. It serves as a template for all other pages that come from a post -->
<!--blog post -->
<?php

get_header( 'single' );

?>
<!-- 	<div id="post-body"> -->

		<?php if ( have_posts() ) : while ( have_posts() ): the_post() ?>

		
		<!-- <p><?php the_time( '1, F jS, Y' ); ?> </p> -->

		<div class="single-content">
			<h1 class="single-title"><?php the_title()?> </h1>
			<?php the_content(); ?>

		<?php if (in_category('Blog')): ?>// we look for comments only in the Blog Category
			<p class="divider">DISCUSSION: </p>
			
			<?php		// we display comments
				wp_list_comments(array( 'format' => 'html5'));
					//we display the comments template
				comments_template();
				else:

			endif;
		?>
		
		
		<?php endwhile; else: ?>
			<p><?php _e( 'Sorry this page does not exist.' ); ?></p>
		<?php endif; ?>
		</div>
		<!-- </div> -->
<!-- Closes container from header -->
</div>
<?php
get_footer();
?>
