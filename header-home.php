<?php 
// $the_terms = array('Systems', 'Ambiance', 'Experiences');
$args = array(
    'parent' => 9,
    'include' => array(12, 6, 8, 7)
);
$terms = get_terms('category', $args);
// For JSON_LD
include('json-ld.php'); 
?>
<head>
<meta charset="utf-8">
<title> <?php bloginfo( 'name' ); ?><?php wp_title( '|', 1, 'left' ); ?> </title>

<!-- Stylesheet -->
<link rel ="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>


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
    <div class="navbar navbar-inverse navbar-fixed-top header-mauricio">
            <!--Logo and Hidden Hambuguer-->
            <nav class="container navbar-inverse" role="navigation">              
              <div class="navbar-header logo-nav">
                <button id="burguer-menu" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse-hook">
                  <span class="sr-only">Toogle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="" id="logo" href=" <?php echo site_url(); ?>" > 
                </a>
              </div>            
                <!--Here we start our Navbar-->
              <div class="collapse navbar-collapse" id="menu-collapse-hook">
                <ul class="nav navbar-nav">
                 <!-- Here we include our menu buttons, it includes each menu button on a <li> tag-->
                  <?php wp_list_pages( array( 'title_li' => '', 'exclude' => 12 ) ); ?>
                </ul>
              </div>
              <!--end of the Navbar-->
            </nav>  
    </div>
     <div class="jumbotron intro">        
        <section class="container home-intro-section">
          <!--This is where my intro goes-->
          <h1>Hi there! I am <a href="http://www.sanchezmauricio.com/about/">Mauricio!</a></h1>
          <p>I am a Product Designer and Creative Technologist. I build algorithms, research technologies, fabricate prototypes to connect the physical with the digital.</p>        
        </section>
    </div>
    <!-- Include this when a nav bar with categories for all different posts is available -->
    <nav id="sidebar" class="project-sidebar">
      <?php 
      $my_new_array = array(); 
      $issue_date = "";
      foreach($terms as $term){
        echo "<button class='project-sidebar-elements'data-filter='.".$term->slug."'>" . $term->name . "</button>\n";
      }  
      ?>
    </nav>
    <!-- This is where the main body starts -->
    <div class="projects-thumbs container">