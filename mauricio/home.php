<!-- This page is used for WP to show posts only. It does not display particular content like a regular page. Different from page.php -->
<?php

get_header( 'home' );

?>
  <h1> Projects </h1>

  
<div id="row">
	

	<?php if ( have_posts() ) : ?>

	
  	<?php while ( have_posts() ):
  	echo '<div class="span4">';
	the_post();
	?><a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( ); echo '</a>'?>
	<h2> <a href="<?php the_permalink(); ?>"> <?php the_title()?> </a> </h2>
			<p> <?php the_time( '1, F jS, Y' );?> </p>
	</div>
	
	<?php endwhile; ?>

	<?php endif; ?>
	
</div>



	<!-- </div> -->
	<?php
get_footer();
?>
