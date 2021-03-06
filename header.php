<?php

/*
Header template  to display on front page
@package ileys
*/

$slide1 = esc_attr(get_option('slider_image_1'));
$slide2 = esc_attr(get_option('slider_image_2'));
$slide3 = esc_attr(get_option('slider_image_3'));
?>


<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php  bloginfo('charset')?>" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="<?php bloginfo('description');?>">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url')?>">
    <?php endif;?>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="/style.css" /> -->
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<div class="container-fluid front-page-container">




    <header class="p-3 px-md-4 mb-3  main-page  bg-white fixed-top" id="front-header">
      <img src="<?php echo get_theme_mod('ileys_logo')?>" class="img-responsive " style="width:120px">
      <nav class="site-nav">

        <?php wp_nav_menu(array(
            'theme_location'=>'primary', 
            'container'=>false,
            'walker'=> new Walker_Nav_Primary()
            ));?>
      </nav>
      <div class="icon top2">
                <div class="hamburger">
                </div>
        </div>
    </header>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?php print $slide1 ;?>')">
            <div class="carousel-caption d-none d-md-block">
                  <div class="carousel-caption-container">
                    <div class="caption-cell">
                      <div class="text-center">
                      <?php if(esc_attr(get_option('slider_text_1'))!=''):?>
                        <h3 class="heading p-5"><?php print esc_attr(get_option('slider_text_1'));?> </h3>
                        <?php endif;?>
                        <?php if(esc_attr(get_option('slider_sub_text_1'))!=''):?>
                        <h4 class="subtext p-3"><?php print esc_attr(get_option('slider_sub_text_1'));?></h4>
                        <?php endif;?>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php print $slide2 ;?>')">
            <div class="carousel-caption p-3 d-none d-md-block">
            <div class="carousel-caption-container">
                   
                    <div class="caption-cell">
                      <div class="text-center">
                        <?php if(esc_attr(get_option('slider_text_2'))!=''):?>
                        <h3 class="heading p-5"><?php print esc_attr(get_option('slider_text_2'));?> </h3>
                        <?php endif;?>
                        <?php if(esc_attr(get_option('slider_sub_text_2'))!=''):?>
                        <h4 class="subtext p-3"><?php print esc_attr(get_option('slider_sub_text_2'));?></h4>
                        <?php endif;?>
                      </div>
                    </div>
                  </div>       
              </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php print $slide3 ;?>')">
            <div class="carousel-caption d-none d-md-block">
            <div class="carousel-caption-container">
                    <div class="caption-cell">
                      <div class="text-center">
                      <?php if(esc_attr(get_option('slider_text_3'))!=''):?>
                        <h3 class="heading p-5"><?php print esc_attr(get_option('slider_text_3'));?> </h3>
                        <?php endif;?>
                        <?php if(esc_attr(get_option('slider_sub_text_3'))!=''):?>
                        <h4 class="subtext p-3"><?php print esc_attr(get_option('slider_sub_text_3'));?></h4>
                        <?php endif;?>
                      </div>
                    </div>
                  </div>  
               </div>
          </div>
        </div>

      </div>        

