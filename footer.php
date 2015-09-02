<?php
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

    <footer>
      <div class="container">
  		  <div class="row">
          <div class="col-md-8">

            <?php

              $footer_main_args = array(
                  'theme_location' => 'footer-menu-main',
                  'container' => false,
                  'menu_class' => 'footer-nav footer-nav-main'
                );

              wp_nav_menu( $footer_main_args );

            ?> 

            <div class="clearfix"></div>
            <hr />

            <?php

              $footer_sub_args = array(
                  'theme_location' => 'footer-menu-sub',
                  'container' => false,
                  'menu_class' => 'footer-nav footer-nav-sub'
                );

              wp_nav_menu( $footer_sub_args );

            ?> 

            <div class="clearfix"></div>
            <hr />
            <br />
            <p>Col. Benjamin Cleveland Chapter &copy; <?php echo date('Y'); ?></p>
            <small>A 501(c)(3) organization.</small>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri() . '/images/nssar-logo.png'; ?>" alt="NSSAR">
            <span class="reg">&reg;</span>
          </div>
        </div> <!-- /.row -->
      </div> <!-- /.container for footer -->
  	</footer>

     <!-- Prevent Yamm3 from unexpectedly closing -->
    <script>    
      $(document).on('click', '.yamm .dropdown-menu', function(e) {
        e.stopPropagation()
      })
    </script> 
    
    <?php wp_footer(); ?>
  </body>
</html>