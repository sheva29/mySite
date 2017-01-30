
<?php 
  // For JSON_LD
  include('json-ld.php'); 
?>
<head>
<meta charset="utf-8">
<title> <?php bloginfo( 'name' ); ?><?php wp_title( '|', 1, 'left' ); ?> </title>

<!-- Stylesheet -->
<link rel ="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Includes BootStrap.js in the head -->
<?php //wp_enqueue_script(); ?>
<?php 
/*Calls the all the information that goes in the head*/
wp_head(); 
?>
<script type="application/ld+json"><?php echo json_encode($payload); ?></script>
</head>

<body>
   <!-- SINGLE POST HEADER -->
  <div class="wrapper">
      <!--Logo and Hidden Hambuguer-->
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">              
        <div class="container navbar-header logo-nav">
          <button id="button" type="button" class="navbar-toggle pull-left" data-toggle="slide-left" data-target=".left-slide">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="" id="logo-container" href=" <?php echo site_url(); ?>" > 
              <div class="logo"></div>
              <span> mauriciosanchez<span>
            </a>
        </div>            
          <!--Here we start our Navbar-->
        <div class="left-slide">
          <nav role="navigation" class="navbar-collapse">
          <ul class="nav navbar-nav">
           <!-- Here we include our menu buttons, it includes each menu button on a <li> tag-->
            <?php wp_list_pages( array( 'title_li' => '', 'exclude' => 12 ) ); ?>
          </ul>
          </nav>
        </div>
        <!--end of the Navbar-->
      </nav>
      <?php
      $page_id = get_queried_object_id();
      if (!in_category('Blog')):
         if (has_post_thumbnail($page_id)):
            $image_array = wp_get_attachment_image_src(get_post_thumbnail_id( $page_id), 'optional-size');
            $image = $image_array[0];
            echo '<div class="jumbotron single-jumbotron" style="background: url('; print $image; echo');"> </div>';  
         endif;
      endif;
      ?> 
    <!-- This is where the main body starts -->
    <div class=" container single-container">