<?php

function get_post_data() {
  global $post;
  return $post;
}
 
// stuff for any page
$payload["@context"] = "http://schema.org/";
 
// this has all the data of the post/page etc
$post_data = get_post_data();
 
// stuff for any page, if it exists
$category = get_the_category();
 
// we do all this separately so we keep the right things for organization together
 
if (is_front_page()) {

  $payload["@type"] = "CreativeWork";
  $payload["name"] = "Mauricio Sanchez Portfolio";
  $payload["image"] = "http://www.sanchezmauricio.com/wp-content/uploads/2016/02/cropped-favicon2-270x270.png";
  $payload["url"] = "http://www.sanchezmauricio.com";
  $payload["sameAs"] = array(
    "https://twitter.com/maurifique",
    "https://www.facebook.com/maurifique",
    "https://www.linkedin.com/in/maurifique",
    "https://plus.google.com/u/1/108080318529088788630/posts",
    "https://github.com/sheva29",
  );
  $payload["author"] = array(
    "@type" => "Person",
    "address" => array(
      "@type" => "PostalAddress",
      "addressCountry" => "USA",
      "addressLocality" => "New York City",
      "addressRegion" => "NY",
      "postalCode" => "11104"
    ),
    "alternateName" => "mauricioSanchez",
    "description" => "I am a Product Designer and Creative Technologist. I build algorithms, research technologies, fabricate prototypes to connect the physical with the digital.",
    "image" => "http://www.sanchezmauricio.com/wp-content/uploads/2016/02/mauricio_about-e1456377133864.jpg",
    "email" => "mailto:design@sanchezmauricio.com",
    "jobTitle" => "Designer",
    "name" => "Mauricio Sanchez",
    "sameAs" => array(
      "https://twitter.com/maurifique",
      "https://www.facebook.com/maurifique",
      "https://www.linkedin.com/in/maurifique",
      "https://plus.google.com/u/1/108080318529088788630/posts",
      "https://github.com/sheva29"),
    "url" => "http:www.sanchezmauricio.com"
  );
  $payload["description"] = "The portfolio of Mauricio Sanchez";
}

//For other pages
if (is_page()){

  // we pass a custome field from the each page
  $custom_page_description = get_post_custom();

  //page link
  $page_url = get_permalink();

  $payload["@type"] = "CreativeWork";
  $payload["name"] = "Mauricio Sanchez Portfolio";
  $payload["url"] = $page_url;
  $payload["description"] = $custom_page_description["page_description"][0];
    $payload["sameAs"] = array(
    "https://twitter.com/maurifique",
    "https://www.facebook.com/maurifique",
    "https://www.linkedin.com/in/maurifique",
    "https://plus.google.com/u/1/108080318529088788630/posts",
    "https://github.com/sheva29",
  );
  $payload["author"] = array(
    "@type" => "Person",
    "address" => array(
      "@type" => "PostalAddress",
      "addressCountry" => "USA",
      "addressLocality" => "New York City",
      "addressRegion" => "NY",
      "postalCode" => "11104"
    ),
    "alternateName" => "mauricioSanchez",
    "description" => "I am a Product Designer and Creative Technologist. I build algorithms, research technologies, fabricate prototypes to connect the physical with the digital.",
    "image" => "http://www.sanchezmauricio.com/wp-content/uploads/2016/02/mauricio_about-e1456377133864.jpg",
    "email" => "mailto:design@sanchezmauricio.com",
    "jobTitle" => "Designer",
    "name" => "Mauricio Sanchez",
    "sameAs" => array(
      "https://twitter.com/maurifique",
      "https://www.facebook.com/maurifique",
      "https://www.linkedin.com/in/maurifique",
      "https://plus.google.com/u/1/108080318529088788630/posts",
      "https://github.com/sheva29"),
    "url" => "http:www.sanchezmauricio.com"
  );

}

// stuff for specific blog posts and projects
if (is_single()) {

  // this gets the data for the user who wrote that particular item
  $author_data = get_userdata($post_data->post_author);
  $post_url = get_permalink();
  $post_thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

  $twitter_url =  " https://twitter.com/";
  $twitterHandle = $author_data->twitter;
  $twitterHandleURL = $twitter_url . $twitterHandle;
  $facebookHandle = $author_data->facebook; 
  $gplusHandle = $author_data->gplus; 
  $linkedinHandle = $author_data->linkedin; 
  $githubHandler = $author_data->github;
 
  $payload["@type"] = "CreativeWork";
  $payload["url"] = $post_url;
  $payload["author"] = array(
      "@type" => "Person",
      "name" => $author_data->display_name,
      "email" => $author_data->user_email,
      "sameAs" =>  array(
        $twitterHandleURL,
        $facebookHandle,
        $gplusHandle, 
        $linkedinHandle, 
        $githubHandle
     )
  );
  $payload["headline"] = $post_data->post_title;
  $payload["datePublished"] = $post_data->post_date;
  $payload["image"] = $post_thumb;
  $payload["about"] = $category[0]->cat_name;
  $payload["Publisher"] = "Mauricio Sanchez";
}
 
//for author 
if (is_author()) {

  // this gets the data for the user who wrote that particular item
  $author_data = get_userdata($post_data->post_author);

  $twitter_url =  " https://twitter.com/";
  $twitterHandle = $author_data->twitter;
  $twitterHandleURL = $twitter_url . $twitterHandle;
  $facebookHandle = $author_data->facebook; 
  $gplusHandle = $author_data->gplus; 
  $linkedinHandle = $author_data->linkedin; 
  $githubHandler = $author_data->github;
  $payload["@type"] = "Person";
  $payload["name"] = $author_data->display_name;
  $payload["email"] = $author_data->user_email;
  $payload["sameAs"] =  array(
    $twitterHandleURL,
    $facebookHandle,
    $gplusHandle, 
    $linkedinHandle,
    $githubHandle 
   );  
}


?>