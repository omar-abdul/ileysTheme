<?php

/*
Header template  to display on front page
@package ileys
*/
?>


<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php  bloginfo('charset')?>" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?> ?>" /> 
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php if(is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url')?>">
    <?php endif;?>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="/style.css" /> -->
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white <?php $x= is_admin_bar_showing()?print 'admin-bar-fixed':print 'fixed-top'; ?> border-bottom box-shadow">
      <h3 class="my-0 mr-md-auto font-weight-normal">Ileys Enterprises</h3>
      <nav class="my-2 my-md-0 mr-md-3">
        <!-- <a class="p-2 text-dark" href="#">Home</a>
        <a class="p-2 text-dark" href="#">About us</a>
        <a class="p-2 text-dark" href="#">Our Business</a>
        <a class="p-2 text-dark" href="#">Media</a>
        <a class="p-2 text-dark" href="#">Contact us</a> -->
        <?php wp_nav_menu(array('theme_location'=>'primary', 'container_class'=>'navbar-item my-2 my-md-0 mr-md-3'));?>
      </nav>
    </div>