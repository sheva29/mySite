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
			  	<div  <?php //post_class( $classes);  ?>  class="projects blog-posts isotope-item" > <!-- we pass the terms as a class to our thumbnail -->
					<!-- <h1><?php //the_post_thumbnail_url();?></h1> -->
					<a href="<?php the_permalink(); ?>" class="test">
					<?php
					if ( has_post_thumbnail() ) {
						$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
                		echo '<div class="blog-post-thumb" style="background-image:url('.$feat_image_url.');"></div>';
           			} ?>
						<p class="blog-title-thumb"> <?php the_title() ?> </p> 
					</a>
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
