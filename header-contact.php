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
    <!-- Header Blog -->
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

     <div class="jumbotron intro contact-intro">
        
        <section class="container intro-section">
          <!--This is where my intro goes-->
          <h1>I'm always open to collaborate or hear new opportunities</h1>
          <p>Shoot me a message at: </p>
          <p id="jumbotron-email">design[at]sanchezmauricio[dot]com</p>
          <p> or feel free to leave a message below, I will get back to you as soon as possible!</p>
        
        </section>       

    </div>

<!-- <h1> People will contact me here</h1> -->
  <div class="container contact-container">
         

    
    

    

