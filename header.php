<?php

/*
Header template  to display on front page
@package ileys
*/
<<<<<<< HEAD

$slide1 = esc_attr(get_option('slider_image_1'));
$slide2 = esc_attr(get_option('slider_image_2'));
$slide3 = esc_attr(get_option('slider_image_3'));
=======
>>>>>>> parent of deb32bc... sections
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




    <header class="p-3 px-md-4 mb-3 bg-white <?php $x= is_admin_bar_showing()?print 'admin-bar-fixed':print 'fixed-top'; ?> border-bottom box-shadow">
      <h5 class="float-left font-weight-normal">Ileys Enterprises</h5>
      <nav>

        <?php wp_nav_menu(array(
            'theme_location'=>'primary', 
            'container_class'=>'site-nav',
            'walker'=> new Walker_Nav_Primary()
            ));?>
      </nav>
      <div class="icon <?php $x= is_admin_bar_showing()?print 'top2':print 'top75'; ?>">
                <div class="hamburger">
                </div>
        </div>
    </header>
<<<<<<< HEAD

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
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php print $slide2 ;?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php print $slide3 ;?>')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>        

=======
>>>>>>> parent of deb32bc... sections
