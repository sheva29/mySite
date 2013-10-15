  <head>
    <meta charset="utf-8">
    <title> <?php bloginfo( 'name' ); ?><?php wp_title( '|', 1, 'left' ); ?> </title>

    <!-- Stylesheet -->
    <link rel ="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" >


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

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div id="header-wrapper" class="navbar-inner header clear">
        <div class="container">
          <a class="btn btn-navbar menu-icon" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          <a class="brand" href=" <?php echo site_url(); ?>" > <p id="mauricio"> mauricio </p> <p id="sanchez"> Sanchez </p> <p id="title"> Interaction Designer & Creative Technologist</p> <!-- <img class="logo2" src="http://localhost/wp-content/uploads/2013/06/logo2.png"> -->  </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
             <?php wp_list_pages( array( 'title_li' => '', 'exclude' => 12 ) ); ?>
            </ul>            
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Mauricio's Portfolio</h1>
          Interaction Designer & Creative Technologist

        <!-- <a class="btn btn-primary btn-large">Learn more »</a> -->

    </div>
