<!-- This page is used for WP to show posts only. It does not display particular content like a regular page. Different from page.php -->
<!DOCTYPE html>
<?php
// we get the header for our home
get_header( 'home2' );
// we want to display only thumbs from the projects category.
$arg = array( 'category_name'=>'Projects', 'posts_perpage'=>'-1' );
// we pass the argument to our query.
$category_posts = new WP_Query( $arg );
// we want to pass some classes to our image containers.
$classes = array('col-md-3 ', 'image-container ');
$terms = get_terms('category', array('parent' => 9));

?>

	<div class="row custom-row grid" id="content" class="isotope">

		<?php if ( $category_posts->have_posts() ) : ?>

		  	<?php while ( $category_posts->have_posts() ):  $category_posts->the_post();
					$termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item	
		  			// echo $termsArray;
					$termsString = ""; //initialize the string that will contain the terms
					// $category = get_the_category();	
					foreach ( $termsArray as $term ) { // for each term 
						// echo $termsDataFilter;
						$termsString .= $term->slug." "; //create a string that has all the slugs for the class
					}
		  	?>
			  	<div  <?php //post_class( $classes);  ?>  class="<?php echo $termsString; ?>item isotope-item" > <!-- we pass the terms as a class to our thumbnail -->
					<a href="<?php the_permalink(); ?>" class="test"> <?php the_post_thumbnail('custom_thumb', array( 'class' => 'img-thumb' ) ); echo '</a>'?> </a>
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
