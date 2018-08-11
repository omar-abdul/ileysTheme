<?php

/*
Header template 
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
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <?php wp_head();?>
</head>
<body <?php body_class();?>>