<?php

 require get_template_directory() . '/inc/function-admin.php';


function custom_theme_setup(){
    add_theme_support( 'title-tag' );
    register_nav_menus(array(
        'primary'=>'Primary navigation area',
        'secondary'=>'Secondary navigation area',
        'social'=>'Social links'
        )
    );
}
add_action('after_setup_theme','custom_theme_setup');


function customTheme_script_enqueue(){
    wp_enqueue_style('bootstrapstyle', get_template_directory_uri()."/css/bootstrap.min.css", array(), "1.0.0", "all" );
    wp_enqueue_style('customstyle', get_template_directory_uri()."/css/custom.css", array(), "1.0.1", "all" );
    wp_enqueue_script('mainjs',get_template_directory_uri() . "/js/main.js",array() ,'1.0.0', true);
    wp_enqueue_script('bootstrapjs',get_template_directory_uri() . "/js/bootstrap.min.js",array() ,'1.0.0', true);
    wp_enqueue_script('jqueryjs', "https://code.jquery.com/jquery-3.3.1.slim.min.js",array() , "1.0.0",true);
    wp_enqueue_script('popperjs', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js",array() , "1.0.0",true);
}

add_action('wp_enqueue_scripts','customTheme_script_enqueue');



