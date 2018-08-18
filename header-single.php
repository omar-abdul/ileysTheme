<?php
/* 

Header to display on all pages except front page

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

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="header-container  text-center" style="background-image:url(<?php header_image(); ?>);">
                    
                    <div class="header-content">
                    
                    </div><!--header-content-->
                    <div class="nav-container">
                    
                    </div><!--header-content-->
                
                </div>
            </div><!--.col-xs-12-->

        </div><!--.row-->
    </div><!--.container-fluid -->