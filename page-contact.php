<!-- Always use the prefix page_'pagename'.php when adding a custom page to your wordpress -->
<!-- Contact Page -->
<?php
//Use this to add a custom page
/* Template name: Contact */

?>

<?php

get_header('contact');
// we want to display only thumbs from the projects category.
$arg = array( 'category_name'=>'Projects', 'posts_perpage'=>'-1' );
// we pass the argument to our query.
$category_posts = new WP_Query( $arg );
// we want to pass some classes to our image containers.
$classes = array('col-md-3 ', 'image-container ');
$terms = get_terms('category', array('parent' => 9));

?> 


	<?php echo do_shortcode( '[contact-form-7 id="157" title="Contact form 1"]' ); ?>
</div>
<?php
get_footer();
?>
