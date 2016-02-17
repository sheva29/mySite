<!-- Always use the prefix page_'pagename'.php when adding a custom page to your wordpress -->
<!-- Blog Page -->
<?php
//Use this to add a custom page
/* Template name: Blog */

?>

<?php

get_header( 'blog');

// we only retrieve the post for our blog
$arg = array('category_name' => 'Blog');
$category_posts = new WP_Query( $arg );

?>


	  <?php if ( $category_posts->have_posts() ) :
				while ( $category_posts->have_posts() ): ?>
				<div class="blog-posts">
				<?php $category_posts->the_post() ?>
				<?php 	if (has_post_thumbnail() ):
						the_post_thumbnail('thumbnail', array( 'class' => 'blog-thumb' ));
						endif;
				?>
					<h2><a href="<?php the_permalink(); ?>"> <?php the_title()?> </a></h2>
					<p> <?php the_time('F jS, Y' );?> </p>
					<p class='entry'> <?php the_excerpt(); ?></p>
					
				</div>
				<?php
				endwhile; 
			else: ?>
				<p><?php _e( 'Sorry this page does not exist.' ); ?></p>			
	<?php 	endif; 
		wp_reset_postdata();
			?>
	<!-- we close container -->
	</div>
<?php
// comments_template();
get_footer();
?>
