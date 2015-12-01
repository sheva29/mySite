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

    <div class="navbar navbar-inverse navbar-fixed-top header-mauricio">

            <nav class="container navbar-inverse" role="navigation">  
              
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toogle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=" <?php echo site_url(); ?>" > 
                <p id="mauricio"> mauricio </p> 
                <p id="sanchez"> Sanchez </p> 
                <p id="title"> Interaction Designer & Creative Technologist</p> 
                <!-- <img class="logo2" src="http://localhost/wp-content/uploads/2013/06/logo2.png"> --> 
                </a>
              </div>

            
                <!--Here we start our Navbar-->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                 <!-- Here we include our menu buttons, it includes each menu button on a <li> tag-->
                  <?php wp_list_pages( array( 'title_li' => '', 'exclude' => 12 ) ); ?>
                </ul>
              </div>
              <!--end of the Navbar-->
            </nav>  

    </div>

     <div class="jumbotron intro">
        
        <section class="container intro-section">
          <!--This is where my intro goes-->
          <h1>Welcome to my portfolio, I am <a href="something">Mauricio!</a></h1>
          <p>I'm a designer who loves building stuff, I enjoy coding and technology, enjoy my portfolio and feel free to contact me</p>
        
        </section>       

    </div>

<!-- This is where the main body starts -->
  <div class="projects-thumbs container-fluid container">
         

    
    

    
 
