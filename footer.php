        
        
        
</div>
                <footer class="footer container-fluid">
                        <div class="footer-menu">
                                <div class="row p-5 justify-contents-center align-items-center" >

                                        <?php wp_nav_menu(array(
                                        'theme_location'=>'secondary', 
                                        'container'=>false
                                        ));?>



                                </div>
                        

                        </div>
                       <?php if(!empty(esc_url(get_option('option_fb'))) &&
                                !empty(esc_attr(get_option('option_tw'))) && 
                                !empty(esc_url(get_option('option_lin')))
                                ):
                                
                                $tw = 'https://twitter.com/'.esc_attr(get_option('option_tw'));
                                
                                ?>
                        <div class="row align-items-center">
                                <div class="col">
                                        <div class="social-media">
                                                <span>
                                                        <a href="<?php echo esc_url(get_option('option_lin'))?>" target="_blank"><i class="icon-social-linkedin bg-social"></i></a>
                                                        <a href="<?php echo esc_url($tw)?>" target="_blank"><i class="icon-social-twitter"></i></a>
                                                        <a href="<?php echo esc_url(get_option('option_fb'))?>" target="_blank"><i class="icon-social-facebook bg-social"></i></a>

                                                </span>
                                        </div>
                                </div><!--col-->
                                <?php endif; ?>
                                <div class="col">
                                <h5> <?php echo __('Have an inquiry, send us an email')?> </h5>
                                        <p> <?php echo esc_attr(get_theme_mod('ileys_support_email_one',__('support@ileys.com')))?></p>
                                        <p> <?php echo esc_attr(get_theme_mod('ileys_support_email_two',__('sales@ileys.com')))?></p>

                                </div>

                        


                        </div>  

                                <div class="footer-credit">
                                        <h6>&copy; <?php echo date("Y"); ?> Ileys Enterprises </h6>
                                </div>
                        
                </footer>
                <?php wp_footer()?>
                                
        </body>
</html>    