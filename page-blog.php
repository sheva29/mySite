<!-- Always use the prefix page_'pagename'.php when adding a custom page to your wordpress -->
<!-- Blog Page -->
<?php
//Use this to add a custom page
/* Template name: Blog */

?>

<?php
/*
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
get_footer(); */
?>

<!-- This page is used for WP to show posts only. It does not display particular content like a regular page. Different from page.php -->
<!DOCTYPE html>
<?php
// we get the header for our home
get_header( 'blog' );
// we want to display only thumbs from the projects category.
$arg = array( 'category_name'=>'Blog', 'posts_perpage'=>'-1' );
// we pass the argument to our query.
$category_posts = new WP_Query( $arg );
// we want to pass some classes to our image containers.
// $classes = array('col-md-3 ', 'image-container ');
// $terms = get_terms('category', array('parent' => 9));

?>

	<div class="row custom-row grid-blog" id="content" class="isotope">

		<?php if ( $category_posts->have_posts() ) : ?>

		  	<?php while ( $category_posts->have_posts() ):  $category_posts->the_post();
					// $termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item	
		  			// echo $termsArray;
					// $termsString = ""; //initialize the string that will contain the terms
					// $category = get_the_category();	
					// foreach ( $termsArray as $term ) { // for each term 
						// echo $termsDataFilter;
						// $termsString .= $term->slug." "; //create a string that has all the slugs for the class
					// }
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
