<?php

 require get_template_directory() . '/inc/function-admin.php';

 require get_template_directory(). '/inc/enqueue.php';

function custom_theme_setup(){
    add_theme_support( 'title-tag' );
    register_nav_menus(array(
        'primary'=>'Primary navigation area',
        'secondary'=>'Secondary navigation area',
        'social'=>'Social links'
        )
    );
    add_theme_support('post-thumbnails');

    $defaults = array(
        'width'=>0,
        'height'=>60,
        'uploads'=>true
    );

    add_theme_support('custom-header',$defaults);
    add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
}
add_action('after_setup_theme','custom_theme_setup');


function customTheme_script_enqueue(){
    wp_enqueue_style('bootstrapstyle', get_template_directory_uri()."/css/bootstrap.min.css", array(), "4.1.3", "all" );
    wp_enqueue_style('customstyle', get_template_directory_uri()."/css/ileys.css", array(), "1.0.1", "all" );

    wp_deregister_script('jquery');
    
    wp_enqueue_script('jquery', get_template_directory_uri() ."/js/jquery.min.js",array() , "3.3.1",true);
    wp_enqueue_script('bootstrapjs',get_template_directory_uri() . "/js/bootstrap.min.js",array('jquery') ,'4.1.3', true);
    wp_enqueue_script('jqueryui',get_template_directory_uri() . "/js/jquery-ui.min.js",array('jquery') ,'1.12.1', true);

    wp_enqueue_script('mainjs',get_template_directory_uri() . "/js/main.js",array('jquery') ,'1.0.0', true);

    wp_enqueue_script('popperjs', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js",array() , "1.0.0",true);
}

add_action('wp_enqueue_scripts','customTheme_script_enqueue');

require get_template_directory(). '/inc/walker.php';


