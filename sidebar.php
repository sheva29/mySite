<div id="sidebar">

<!-- <h2>Project Categories</h2> -->

	<?php 

	dynamic_sidebar( 'project-sidebar' ); 
	// wp_list_categories('orderby', 'id' );

	?>
	<!-- <?php dynamic_sidebar( 'second-right-sidebar' ); ?> -->
	<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar() ): ?>
<?php endif; ?>

</div>
