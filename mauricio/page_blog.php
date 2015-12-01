<!-- Always use the prefix page_'pagename'.php when adding a custom page to your wordpress -->
<?php
//Use this to add a custom page
/* Template name: Blog */

?>

<?php

get_header( 'blog');

// we only retrieve the post for our blog
$arg = 'category_name=Blog';
$category_posts = new WP_Query( $arg );

?>

<div class="row">
	<?php if ( $category_posts->have_posts() ) :
		while ( $category_posts->have_posts() ):
		echo'<div class="blog-posts">';
		$category_posts->the_post() ?>

			<h2><a href="<?php the_permalink(); ?>"> <?php the_title()?> </a></h2>
			<p> <?php the_time('F jS, Y' );?> </p>
			<p class='entry'> <?php the_excerpt('Read the rest of this entry &raquo;'); ?></p>
			

		</div>
		<?php endwhile; 
			else: ?>
			<p><?php _e( 'Sorry this page does not exist.' ); ?></p>
			
	<?php endif; ?>
</div>

<?php
get_footer();
?>
