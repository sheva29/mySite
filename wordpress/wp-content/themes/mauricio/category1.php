<?php
/**
* CAt
*/

get_header('home'); 

$classes = array('col-md-3', 'image-container');

?> 

<!-- <section id="primary" class="site-content"> -->
<!-- <div id="content" role="main"> -->



<div class="row custom-row">
	<?php 
// check if there are any posts to display.
	if ( have_posts() ) : ?>

	<!-- <header class="archive-header"> -->
	<!-- <h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1> -->


<!-- 	<?php
	// Display optional category description
	 if ( category_description() ) : 
	 	?> -->
	<!-- <div class="archive-meta"><?php echo category_description(); ?></div> -->
	<!-- <?php endif; ?> -->
	<!-- </header> -->

	<?php

	// The Loop
		while ( have_posts() ) :
		?>
		<!-- <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2> -->
		<!-- <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small> -->

		<!-- <div class="entry"> -->
		<!-- <?php the_content(); ?> -->

<!-- 		 <p class="postmetadata"><?php
		  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
		?></p> -->
		<!-- </div> -->

			<div  <?php post_class( $classes); ?> >

				<!-- <?php the_post(); ?> -->

				<!-- <a href="<?php the_permalink(); ?>" class="test"> <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' ) ); echo '</a>'?> </a>

				<div class="projects" id="<?php the_ID(); ?>">

					<a class="thumb-title" href="<?php the_permalink(); ?>"> <?php the_title()?> / </a>
					<a class="project-year" href="<?php the_permalink(); ?>"> <?php the_time( 'Y' );?> </a>

				</div> -->

			</div>

		<?php endwhile; 

	else: ?>
	<p>Sorry, no posts matched your criteria.</p>


	<?php endif; ?>

</div>
<!-- </section> -->


<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>