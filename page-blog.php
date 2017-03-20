<!DOCTYPE html>
<?php
// we get the header for our home
get_header( 'blog' );
// we want to display only thumbs from the projects category.
$arg = array( 'category_name'=>'Blog', 'posts_perpage'=>'-1' );
// we pass the argument to our query.
$category_posts = new WP_Query( $arg );
?>

	<div class="row custom-row grid-blog" id="content" class="isotope">

		<?php if ( $category_posts->have_posts() ) : ?>

		  	<?php while ( $category_posts->have_posts() ):  $category_posts->the_post();
		  	?>
			  	<div  <?php //post_class( $classes);  ?>  class="projects blog-posts item isotope-item" > <!-- we pass the terms as a class to our thumbnail -->
					<a href="<?php the_permalink(); ?>" class="test"> <?php 

						echo '<div style="background: url('; 
						the_post_thumbnail_url('custom_thumb', array( 'class' => 'img-thumb' ) ); 
						echo ');" class="col-md-8 col-md-offset-2"> </div>'; 
					// echo '</a>'
						?> 
					</a>
						<a class="thumb-title" href="<?php the_permalink(); ?>"> <?php the_title() ?> <!-- / --> </a>
						<span class="project-year"> <?php the_time( 'Y' );?> </span> 
				</div>

			<?php endwhile;?>
		<?php endif; ?>
	<?php wp_reset_postdata();?>
	
	<!--Closes thumbnails-->
	</div>
<!-- Closes container projects-thumbs & container -->
</div>
<?php
get_footer();
?>
