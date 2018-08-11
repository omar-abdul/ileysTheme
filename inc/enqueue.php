<?php


function ileys_admin_enqueue_scripts($hook){

    if('toplevel_page_ileys_theme'!=$hook){
        return ;
    }
    wp_register_style('admin_style', get_template_directory_uri() . '/css/ileys.admin.css', array(),'1.0.0','all');
    wp_enqueue_style('admin_style');


    wp_register_style('bootstrapstyle', get_template_directory_uri()."/css/bootstrap.min.css", array(), "1.0.0", "all" );
    wp_enqueue_style('bootstrapstyle');

    wp_enqueue_media();

    wp_register_script('ileys_admin_js', get_template_directory_uri() . '/js/ileys.admin.js', array('jquery'),'1.0.0',true);
    wp_enqueue_script('ileys_admin_js');
}

add_action('admin_enqueue_scripts','ileys_admin_enqueue_scripts');