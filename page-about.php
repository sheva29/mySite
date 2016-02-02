<!-- Always use the prefix page_'pagename'.php when adding a custom page to your wordpress -->
<!-- About Page -->
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

<p class="about-paragraph"> I am a Colombian designer and technologist. I have an MFA in Design and Technology from Parsons School of Design and received my bachelors in Industrial Design from ICESI University. I currently work with Spies & Assassins where I tinker with algorithms and data as a Product Architect and Experiential Developer. </p>

<p class="about-paragraph">I moved to New York City in 2008 to work at Glide-Inc, an engineering firm, where I consulted on design and the development of products and furniture. After two years at Glide, I went to work at Martel Design focusing on digital fabrication and customized furniture. My current work focuses on exploring the junction of physical and digital through creative coding and digital experiences to deliver human centric products that always meet client expectations. </p>

<p class="about-paragraph">Mauricio is a movie aficionado, a passionate cook and a frustrated soccer player who can be found in Chinatown playing in the amateur league.</p>

<?php
get_footer();
?>
