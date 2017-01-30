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
	<div class="row custom-row grid" id="content" class="isotope">
		<?php if ( $category_posts->have_posts() ) :
			while ( $category_posts->have_posts() ): $category_posts->the_post();  ?>
				<div class="blog-posts isotope-item">				
					<a class="blog-posts-a" href="<?php the_permalink(); ?>">
					<?php 	if (has_post_thumbnail() ):
							the_post_thumbnail('custom_thumb', array( 'class' => 'blog-thumb' ));
							endif;
					?>
					
						<h2 class="blog-title"> <?php the_title()?> </h2>
						<p class="blog-date"> <?php the_time('F jS, Y' );?> </p>
						<p class='blog-entry'> <?php the_excerpt(); ?></p>
					</a>
				<!-- we close isotope item -->		
				</div>
		<?php endwhile; ?> 			
	<?php endif; ?>
	<?php wp_reset_postdata();?>
			<!--Closes thumbnails-->
	</div>
	<!-- we close container -->
</div>
<?php
get_footer();
?>
