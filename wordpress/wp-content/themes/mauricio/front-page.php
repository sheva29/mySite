<!-- This page is used for WP to show posts only. It does not display particular content like a regular page. Different from page.php -->
<?php

get_header( 'home' );
$arg = 'category_name=Projects';
$category_posts = new WP_Query( $arg );

?>
  <h1> Projects </h1>


<div id="row">


	<?php if ( $category_posts->have_posts() ) : ?>


  	<?php while ( $category_posts->have_posts() ):
		echo '<div class="span4">';
		$category_posts->the_post();?>
		<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( ); echo '</a>'?>
	<h2> <a href="<?php the_permalink(); ?>"> <?php the_title()?> </a> </h2>
			<p> <?php the_time( 'F jS, Y' );?> </p>
			<?php wp_reset_postdata(); ?>
	</div>

	<?php endwhile; ?>

	<?php endif; ?>

</div>



	</div>
	<?php
get_footer();
?>
