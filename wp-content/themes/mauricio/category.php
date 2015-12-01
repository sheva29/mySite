
<?php

get_header( 'home' );
$classes = array('col-md-3', 'image-container');
?>
  <!-- <h1> Projects </h1> -->

  <?php 
// this calls our side bar to find projects based on its categories.
get_sidebar('Project Categories'); 

?>
  
<div class="row custom-row">	

	<?php if ( have_posts() ) : ?>

	  	<?php while ( have_posts() ):

	  	// post_class('col-md-3');
	// echo '<div class="col-md-3 image-container" >';

	  	?>
		  	<div  <?php post_class( $classes); ?> >

				<?php the_post();?>

				<a href="<?php the_permalink(); ?>" class="test"> <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ) ); echo '</a>'?> </a>

				<div class="projects" id="<?php the_ID(); ?>">

					<a class="thumb-title" href="<?php the_permalink(); ?>"> <?php the_title()?> / </a>
					<a class="project-year" href="<?php the_permalink(); ?>"> <?php the_time( 'Y' );?> </a>

				</div>

			</div>

		<?php endwhile;?>

	<?php endif; ?>
	
</div>



	<!-- </div> -->
	<?php
get_footer();
?>