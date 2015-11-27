<!-- This page is used for WP to show posts only. It does not display particular content like a regular page. Different from page.php -->
<!DOCTYPE html>
<?php


get_header( 'home' );
// we want to display only thumbs from the projects category.
$arg = array( 'category_name'=>'Projects', 'posts_perpage'=>'-1' );
// we pass the argument to our query.
$category_posts = new WP_Query( $arg );
// we want to pass some classes to our image containers.
$classes = array('col-md-3 ', 'image-container ');
$terms = get_terms('category', array('parent' => 9));


?>

  <!--Include this when a nav bar with categories for all different posts is available
    <h1> Projects </h1>
-->

<?php 
// this calls our side bar to find projects based on its categories.
// get_sidebar('Project Categories'); 

	
	// $count = count($terms);
	// foreach($terms as $term){
	// 	print($term->slug.' ');
	// }

	?>
	<nav id="sidebar" class="project-sidebar">
		<ul id="content1">
		<?php foreach($terms as $term){
				
				echo "<li class='project-sidebar-elements'><a href data-filter='.".$term->slug."'>" . $term->name . "</a></>\n";

			  }
		?>
		</ul>
	</nav>



<div class="row custom-row" id="content">

	<?php if ( $category_posts->have_posts() ) : ?>

	  	<?php while ( $category_posts->have_posts() ):  $category_posts->the_post();

	//   	post_class('col-md-3');
	// var_dump(the_post());
				$termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
	
	  			// echo $termsArray2;
				$termsString = ""; //initialize the string that will contain the terms
				$termsDataFilter = "";
				$result = count($classes);
				$category = get_the_category();
				$categoryIndex = 0;

				foreach ( $termsArray as $term ) { // for each term 

					// echo $termsDataFilter;
					$termsString .= $term->slug." "; //create a string that has all the slugs for the class
					$termsDataFilter .= ".".$term->slug.", ";
					$index = $result++;
					$classes[$index] = $termsString;
					$categories[$categoryIndex] = $category;
					$categoryIndex++;

				}
	  	?>

        <!-- 	\<?php  

				// if ( !has_category( $category_posts->the_post()){

				// 	 wp_set_post_categories( '12');

				// }
		?> -->

		  	<div  <?php /*post_class( $classes);*/  ?>  class="<?php echo $termsString; ?>item" data-filter=" <?php echo $termsDataFilter; ?>" >

				<a href="<?php the_permalink(); ?>" class="test"> <?php the_post_thumbnail('custom_thumb', array( 'class' => 'img-responsive' ) ); echo '</a>'?> </a>

				<div class="projects" id="<?php the_ID(); ?>">

					<a class="thumb-title" href="<?php the_permalink(); ?>"> <?php the_title()?> / </a>
					<a class="project-year" href="<?php the_permalink(); ?>"> <?php the_time( 'Y' );?> </a>

				</div>

			</div>

		<?php endwhile;?>

	<?php endif; ?>

	<?php

	// $arraySize = count($classes);

	// for($i = 0; $i < $arraySize; $i++){

		// print($classes[$i]);
	// }

	// $categorySize = count($categories);
	// for($i; $i < $categorySize; $i++){



		// print($categories[$i]);

	// }

	?>


<?php wp_reset_postdata();?>

<!--Closes thumbnails-->

</div>
<!-- Closes Main body -->

	<?php
get_footer();
?>
