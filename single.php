<!-- This is a single page. It serves as a template for all other pages that come from a post -->
<!--blog post -->
<?php

get_header('home2');
$parent = $post->ID;
?>

<?php 
	if ( have_posts() ) : 
		while ( have_posts() ): the_post() ?>		

			<div class="single-content">
				<h1 class="single-title"><?php the_title()?> </h1>
				<h4 class="single-description">Description: <?php if(!in_array("project_description", get_post_custom_keys('1'))){ $meta = get_post_meta( $parent, 'project_description', true); print $meta; }?> </h4>
				<h4 class="single-roles"> Role: <?php if(!in_array("role", get_post_custom_keys('1'))){ $meta = get_post_meta( $parent, 'role', true); print $meta; }?> </h4>
				<?php the_content(); ?>
			<!-- we close the content() -->
			</div>
	<?php 	if (in_category('Blog')): ?><!--we look for comments only in the Blog Category -->
					
				<p class="divider">DISCUSSION:</p>

			<?php
				// we display comments
				$comments = get_comments( array( 'post_id' => get_the_ID() ) );
				$args = array( 'reverse_top_level' => false );
				wp_list_comments($args, $comments);
				//we display the comments template
				comment_form(); //we use this as opposed to comments_template();?>
				
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