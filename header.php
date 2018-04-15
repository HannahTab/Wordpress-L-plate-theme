<!DOCTYPE html>

<html>

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title><!-- Display the title of the page followed by the name of the blog -->

        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" /><!-- Link to your favicon -->

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"><!-- Set up your viewport to make sure your theme shows up correctly on mobile devices -->

        <meta name="Revisit-After" content="7 Days"><!-- Useful for search engines -->

        <meta name="robots" content="index,follow"><!-- Useful for search engines -->

        <?php wp_head(); ?><!-- Properly enqueued stylesheets and scripts will appear in this function - VERY IMPORTANT -->

    </head>

    <body>

        <div class="header">

            <div class="wrap_1280">

                <div class="logo">

                    <a href='/fromscratch/index.php' title="Wordpress Development Solutions"><img src="<?php echo get_template_directory_uri(); ?>/images/wds_theme_tutorial_logo.png" width="300" height="191" alt="" /></a><!-- Notice the WordPress function that dynamically creates the path to your theme -->

                </div>  
 
                <div class="social-icons-header">

                    <div class="social-wrap pull-right">

                        <div class="social-icons"><a href='https://www.facebook.com/WordpressDevSolutions' target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" width="32" height="32" alt="WordPress Development Solutions Facebook" /></a></div>

                        <div class="social-icons"><a href='https://twitter.com/WpDevSolutions' target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg" width="32" height="32" alt="WordPress Development Solutions Twitter" /></a></div>

                        <div class="social-icons"><a href="https://plus.google.com/104168601045265342740" rel="publisher" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/googleplus.jpg" width="32" height="32" alt="WordPress Development Solutions Google+" /></a></div>

                        <div class="social-icons"><a href='http://wpdevsolutions.tumblr.com/' target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/tumblr.jpg" width="32" height="32" alt="WordPress Development Solutions Tumblr" /></a></div>

                    <div class="clearfix"></div>

                    </div>      
  
                </div>

                <div class="clearfix"></div>

            </div>

        </div>

        <div class="navigation-wrapper">    

            <div class="wrap_1280">

                <div class="navigation">

                    <?php if ( !wp_is_mobile() ) { ?><!-- This is a built in function that determines if on mobile device or not -->

                            <div class="menu-wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <?php wp_nav_menu(array('theme_location' => 'top-menu')); ?><!-- This is where you dynamically call your main menu -->

                            </div>

                    <?php } ?>

                            <div class="toggle"><a href="#" id="responsive-top-nav-button">MENU</a></div>

                            <div class="responsive-top-navigation"><?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?></div><!-- This is where you dynamically call your mobile menu -->

                            <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>

            </div>

        </div>