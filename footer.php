        
        

</div>
                <footer class="footer container-fluid ">
                        <div class="footer-menu p-4 ">
                                <div class="row  justify-content-center align-items-center " >
                                        <div class="col-12 col-md-4">
                                        <img src="<?php echo get_theme_mod('ileys_logo')?>" class="img-responsive " style="width:200px">

                                        </div>

                                        <div class="col-12 col-md-2">
                                                <?php wp_nav_menu(array(
                                                'theme_location'=>'secondary', 
                                                'container'=>false
                                                ));?>
                                        </div>


                                <div class="col-12 col-md-6 ">
                                        <?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
                                        <div id="footer-sidebar1" class="footer-widget widget-area" role="complementary">
                                        <?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
                                        </div>
                                        <?php endif; ?>

                                </div>




                        

                        </div>

                        <div class="row    justify-content-center align-items-center  ">


                                <div class="col-12 col-md-6 ">
                                        <?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
                                        <div id="footer-sidebar2" class="footer-widget widget-area" role="complementary">
                                        <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
                                        </div>
                                        <?php endif; ?>

                                </div>


                                <div class="col-12 col-md-6 mt-2">
                                <h5> <?php echo __('Have an inquiry, send us an email')?> </h5>
                                        <p> <?php echo esc_attr(get_theme_mod('ileys_support_email_one',__('support@ileys.com')))?></p>

                                </div>


                                </div>




                        </div>  

                                <div class="footer-credit d-flex  justify-content-center align-items-end ">
                                        <div class="copyright mr-1">
                                        
                                        <h6>&copy; <?php echo date("Y"); ?> Ileys Enterprises </h6>

                                        </div>
                                 <?php if(!empty(esc_url(get_option('option_fb'))) &&
                                !empty(esc_attr(get_option('option_tw'))) && 
                                !empty(esc_url(get_option('option_lin')))
                                ):
                                
                                $tw = 'https://twitter.com/'.esc_attr(get_option('option_tw'));
                                
                                ?>
                                
                                
                                        <div class="social-media ml-1 ">
                                                <span>
                                                        <a href="<?php echo esc_url(get_option('option_lin'))?>" target="_blank"><i class="icon-social-linkedin bg-social"></i></a>
                                                        <a href="<?php echo esc_url($tw)?>" target="_blank"><i class="icon-social-twitter"></i></a>
                                                        <a href="<?php echo esc_url(get_option('option_fb'))?>" target="_blank"><i class="icon-social-facebook bg-social"></i></a>

                                                </span>
                                        </div>
                                
                                <?php endif; ?>
                                </div>
                        
                </footer>
                <?php wp_footer()?>
                 
        </body>
</html>    