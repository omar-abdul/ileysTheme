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

        <?php wp_nav_menu(array('theme_location'=>'primary', 'container_class'=>'site-nav'));?>
      </nav>
      <div class="icon <?php $x= is_admin_bar_showing()?print 'top2':print 'top75'; ?>">
                <div class="hamburger">
                </div>
        </div>
    </header>
