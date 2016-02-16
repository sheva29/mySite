<?php $terms = get_terms('category', array('parent' => 9)); ?>

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

    <!-- This is where the main body starts -->
    <div class="container single-container">