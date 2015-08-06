<?php
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title( '' ); ?></title>

    <?php wp_head(); ?>  

  </head>
  <body <?php body_class(); ?>>

  <!-- NAVBAR
  ========================================== -->
    <nav class="navbar yamm navbar-default">
      <div class="container">
        <div class="navbar-header">
          <!-- Toggle Nav Button -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"> 
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_home_url(); ?>">Col. Benjamin Cleveland Chapter</a> <!-- Logo -->
        </div>
        <!-- Collect Elements for Toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
          <ul class="nav navbar-nav navbar-right">
            <!-- First Nav Element 
            ================================== -->
            <li class="dropdown yamm-fw">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Chapter</a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <div class="yamm-content">
                    <div class="yamm-header">
                      <h1>Col. Benjamin Cleveland Chapter</h1>
                    </div>
                    <div class="row">
                      <div class="col-md-4">

                        <?php

                          $chapter_left_args = array(
                              'theme_location' => 'chapter-menu-left',
                              'container' => false
                            );

                          wp_nav_menu( $chapter_left_args );

                        ?>

                      </div>
                      <div class="col-md-4">

                        <?php

                          $chapter_right_args = array(
                              'theme_location' => 'chapter-menu-right',
                              'container' => false
                            );

                          wp_nav_menu( $chapter_right_args );

                        ?> 

                      </div>
                      
                      <?php get_sidebar( 'chapter' ); ?>

                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Second Nav Element 
            ================================== -->
            <li class="dropdown yamm-fw">
              <a href='#' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Join</a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <div class="yamm-content">
                    <div class="yamm-header">
                      <h1>Become a Member</h1>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        
                        <?php

                          $join_left_args = array(
                              'theme_location' => 'join-menu-left',
                              'container' => false
                            );

                          wp_nav_menu( $join_left_args );

                        ?> 

                      </div>
                      <div class="col-md-4">
                        
                        <?php

                          $join_right_args = array(
                              'theme_location' => 'join-menu-right',
                              'container' => false
                            );

                          wp_nav_menu( $join_right_args );

                        ?> 

                      </div>

                      <?php get_sidebar( 'join' ); ?>

                    </div>
                  </div>
                </li>
              </ul>
            </li> 
            <!-- Third Nav Element 
            ================================== -->
            <li class="dropdown yamm-fw">
              <a href='#' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SAR</a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <div class="yamm-content">
                    <div class="yamm-header">
                      <h1>National and State</h1>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        
                        <?php

                          $sar_left_args = array(
                              'theme_location' => 'sar-menu-left',
                              'container' => false
                            );

                          wp_nav_menu( $sar_left_args );

                        ?> 

                      </div>
                      <div class="col-md-4">
                        
                        <?php

                          $sar_right_args = array(
                              'theme_location' => 'sar-menu-right',
                              'container' => false
                            );

                          wp_nav_menu( $sar_right_args );

                        ?> 

                      </div>
                      
                      <?php get_sidebar( 'sar' ); ?>

                    </div>
                  </div>
                </li>
              </ul>
            </li> 
            <!-- Fourth Nav Element 
            ================================== -->
            <li class="dropdown yamm-fw">
              <a href='#' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact</a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <div class="yamm-content">
                    <div class="yamm-header">
                      <h1>Connect with Us</h1>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        
                        <?php

                          $contact_left_args = array(
                              'theme_location' => 'contact-menu-left',
                              'container' => false
                            );

                          wp_nav_menu( $contact_left_args );

                        ?> 

                      </div>
                      <div class="col-md-4">
                        
                        <?php

                          $contact_right_args = array(
                              'theme_location' => 'contact-menu-right',
                              'container' => false
                            );

                          wp_nav_menu( $contact_right_args );

                        ?> 

                      </div>
                      
                      <?php get_sidebar( 'contact' ); ?>

                    </div>
                  </div>
                </li>
              </ul>
            </li> 
          </ul>

        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container for navbar -->
    </nav>