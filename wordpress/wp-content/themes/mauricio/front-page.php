<!-- This page is used for WP to show posts only. It does not display particular content like a regular page. Different from page.php -->
<!DOCTYPE html>
<?php

get_header( 'home' );
$arg = 'category_name=Projects';
$category_posts = new WP_Query( $arg );

?>

     <div class="jumbotron intro">
            
            <section class="container intro-section">
              <!--This is where my intro goes-->
              <h1>Welcome to my portfolio, I am <a href="something">Mauricio!</a></h1>
              <p>I'm a designer who loves building stuff, I enjoy coding and technology, enjoy my portfolio and feel free to contact me</p>
            
            </section>       

     </div>

<!--This is where the main body starts-->
<div class="container">
  
  <!--Include this when a nav bar with categories for all different posts is available
    <h1> Projects </h1>
-->
	<div class="row">


		<?php if ( $category_posts->have_posts() ) : ?>

	  	<?php while ( $category_posts->have_posts() ):
			echo '<div class="col-md-3 image-container" >';
			$category_posts->the_post();?>
			<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( ); echo '</a>'?>
			<div class="thumb-title">	
				<h2> <a href="<?php the_permalink(); ?>"> <?php the_title()?> </a> </h2>
					<!--<p> <?php the_time( 'Y' );?> </p>-->
					<?php wp_reset_postdata(); ?>
			</div>
				
	</div>

		<?php endwhile; ?>

		<?php endif; ?>
<!--Closes thumbnails-->

</div>
<!--Closes Main body-->

	<?php
get_footer();
?>
