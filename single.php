<!-- This is a single page. It serves as a template for all other pages that come from a post -->
<!--blog post -->
<?php

get_header('single');

?>

<?php 
	if ( have_posts() ) : 
		while ( have_posts() ): the_post() ?>		
		<!-- <p><?php the_time( '1, F jS, Y' ); ?> </p> -->
			<div class="single-content">
				<h1 class="single-title"><?php the_title()?> </h1>
				<?php the_content(); ?>
			<!-- we close the content() -->
			</div>
	<?php 	if (in_category('Blog')): ?><!--we look for comments only in the Blog Category -->
				<p class="divider">DISCUSSION:</p>				
			<?php		
				// we display comments
				$comments = get_comments(array(
											'status' => 'approve',
										));
				$args = array(
							'reverse_top_level' => false
						);
				
				wp_list_comments($args, $comments);

				//we display the comments template
				comment_form();				
				?>
	 <?php 	 	
			endif;
		endwhile; ?>		
<?php 
	else: ?>
		<p><?php _e( 'Sorry this page does not exist.' ); ?></p>
<?php 
	endif; ?>
<!-- closes single-container -->	
</div>
<?php
get_footer();
?>