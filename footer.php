        
        
        

                <footer class="footer">
                        <div class="footer-menu">
                                <div class="row p-5 justify-contents-center align-items-center" >

                                        <?php wp_nav_menu(array(
                                        'theme_location'=>'secondary', 
                                        'container'=>false
                                        ));?>



                                </div>
                        

                        </div>
                       <?php if(!empty(esc_attr(get_option('option_fb'))) &&
                                !empty(esc_attr(get_option('option_tw'))) && 
                                !empty(esc_attr(get_option('option_lin')))
                                ):?>
                        <div class="row align-items-center">
                                <div class="col">
                                        <div class="social-media">
                                                <a class="social-links">
                                                
                                                </a>
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
                                </div>
        </body>
</html>    