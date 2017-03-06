     <!-- This is the end of the main body -->
    <?php 
    if(in_category("All")):
      echo '<div class="container">';
      get_sidebar("projects-filter");
      echo '</div>';
    endif;
    ?>
      <footer id="footer-mauricio" class="navbar-inverse">
        <div class="container">
            <section class="contact-images row">

              <div class="col-xs-3 col-lg-3 footer-column-container"> 
                <p class="others-title"> CONTACT </p>
                <p class="footer-email"> design[at]sanchezmauricio.com</p>
              </div>

              <div class="col-xs-9 col-lg-9 footer-column-container social-elements-container"> 
                <!-- <p class="others-title"> SOCIMEDIAAL  </p> -->
                <div class="social-elements">
                    <a href="https://twitter.com/maurifique" target="_blank">
                      <img id="twitter" src="http://www.sanchezmauricio.com/wp-content/uploads/2017/01/twitter_logov2.0.png" >
                    </a>
                    <a href="https://www.linkedin.com/profile/view?id=51325490&trk=nav_responsive_tab_profile" target="_blank">
                      <img id="linkedin" src="http://www.sanchezmauricio.com/wp-content/uploads/2017/01/linkedin-logov2.0.png" >
                    </a>
                      <a href="https://github.com/sheva29" target="_blank">
                      <img id="github" src="http://www.sanchezmauricio.com/wp-content/uploads/2017/01/github_logov2.0.png">
                    </a>
                    <a href="http://www.sanchezmauricio.com/thinkingprocess/" target="_blank">
                      <img id="blog" src="http://www.sanchezmauricio.com/wp-content/uploads/2017/01/wordpress_logov2.0.png" ">
                    </a>
                </div>
              </div>
                <div class="copy-right">
                    <p id="bottom-content"> &copy; Mauricio Sanchez | <?php echo date( 'Y' ); ?> </p>
                </div>
          </section>
        </div>       
      </footer>
      <?php wp_footer(); ?> 
    <!-- we close class wrapper -->
    </div>
  </body>
</html>
