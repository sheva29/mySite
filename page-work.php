<!-- Always use the prefix page_'pagename'.php when adding a custom page to your wordpress -->
<!-- Work Page -->
<?php
//Use this to add a custom page
/* Template name: Work */

?>

<?php

get_header( 'work');
// we want to display only thumbs from the projects category.
$arg = array( 'category_name'=>'Projects', 'posts_perpage'=>'-1' );
// we pass the argument to our query.
$category_posts = new WP_Query( $arg );
// we want to pass some classes to our image containers.
// $classes = array('col-md-3 ', 'image-container ');
?>
	<div class="row custom-row" id="content" class="isotope">
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
					<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('custom_thumb', array( 'class' => 'img-thumb' ) ); echo '</a>'?> </a>
						<a class="thumb-title" href="<?php the_permalink(); ?>"> <?php the_title()?> <!-- / --> </a>
						<!-- <a class="project-year" href="<?php the_permalink(); ?>"> <?php the_time( 'Y' );?> </a> -->
				</div>
			<?php endwhile;?>
		<?php endif; ?>
	<?php wp_reset_postdata();?>
	<!--Closes thumbnails-->
	</div>
<!-- Closes Main body -->
</div>
<?php
get_footer();
?>
