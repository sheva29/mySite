<!-- This page is used for WP to show posts only. It does not display particular content like a regular page. Different from page.php -->
<!DOCTYPE html>
<?php

get_header( 'home' );
$arg = array( 'category_name'=>'Projects', 'posts_perpage'=>'-1' );
$category_posts = new WP_Query( $arg );



?>

  <!--Include this when a nav bar with categories for all different posts is available
    <h1> Projects </h1>
-->
	<div class="row">

		<?php if ( $category_posts->have_posts() ) : ?>

		  	<?php while ( $category_posts->have_posts() ):
		echo '<div class="col-md-3 image-container" >';
	$category_posts->the_post();?>

				<a href="<?php the_permalink(); ?>" class="test"> <?php the_post_thumbnail( ); echo '</a>'?></a>

				<div class="project" id="<?php the_ID(); ?>">

					<a class="thumb-title" href="<?php the_permalink(); ?>"> <?php the_title()?> / </a>
					<a class="project-year" href="<?php the_permalink(); ?>"> <?php the_time( 'Y' );?> </a>

				</div>

	</div>

			<?php endwhile; ?>

		<?php endif; ?>

	<?php wp_reset_postdata();?>


<!--Closes thumbnails-->

</div>
<!-- Closes Main body -->

	<?php
get_footer();
?>
