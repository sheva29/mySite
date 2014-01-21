  <head>
    <meta charset="utf-8">
    <title> <?php bloginfo( 'name' ); ?><?php wp_title('|',1,'left'); ?> </title>

    <!-- Stylesheet -->
    <link rel ="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" >


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script( "jquery" ); ?>
    <?php wp_head(); ?>

      </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="brand" href="<?php echo site_url(); ?>"> <?php bloginfo( $show='name' ); ?> </div>
          <div class="nav-collapse collapse">
            <ul class="nav navbar-nav">

            
             <?php wp_list_pages( array('title_li' => '', 'exclude' => 12) ); ?>
             

            </ul>

            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">


