<!-- Always use the prefix page_'pagename'.php when adding a custom page to your wordpress -->
<!-- Work Page -->
<?php
//Use this to add a custom page
/* Template name: About */

?>

<?php

get_header( 'about');
// we want to display only thumbs from the projects category.
$arg = array( 'category_name'=>'Projects', 'posts_perpage'=>'-1' );
// we pass the argument to our query.
$category_posts = new WP_Query( $arg );
// we want to pass some classes to our image containers.
$classes = array('col-md-3 ', 'image-container ');
$terms = get_terms('category', array('parent' => 9));

?>

 

<h1> We will talk about me </h1>

<?php
get_footer();
?>
