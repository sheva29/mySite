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
              <span> mauriciosanchez</span>
            </a>
        </div>            
          <!--Here we start our Navbar-->
        <div class="left-slide in">
          <nav role="navigation" class="navbar-collapse">
          <ul class="nav navbar-nav left-slide-nav">
           <!-- Here we include our menu buttons, it includes each menu button on a <li> tag-->
            <li class="page_item">
               <a href="http://www.sanchezmauricio.com"> work </a>
            </li>
            <?php wp_list_pages( array( 'title_li' => '', 'exclude' => "12,4" ) ); ?>
          </ul>
          </nav>
        </div>
        <!--end of the Navbar-->
      </nav>  
     <div class="jumbotron intro">        
          <!--This is where my intro goes-->
        <section class="container home-intro-section">
          <p>Welcome to my Website! I am <a href="http://www.sanchezmauricio.com/about/">Mauricio Sanchez</a>, a full stack engineer and product designer focusing on solutions to help companies and individuals improve their products, processes and platforms.
          </br>
          </br>
          I build experiences, platforms, algorithms, research technologies, fabricate prototypes and enjoy connecting the physical with the digital.
          </p>          
        </section>
    </div>
    <!-- Include this when a nav bar with categories for all different posts is available -->
    <?php 
      get_sidebar("projects-filter");
    ?>
    <!-- This is where the main body starts -->
    <div class="projects-thumbs container">