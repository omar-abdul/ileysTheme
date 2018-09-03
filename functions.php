<?php

 require get_template_directory() . '/inc/function-admin.php';

 require get_template_directory(). '/inc/enqueue.php';
 require get_template_directory(). '/inc/ajax.php';

 show_admin_bar(false);

function custom_theme_setup(){
    add_theme_support( 'title-tag' );
    register_nav_menus(array(
        'primary'=>'Primary navigation area',
        'secondary'=>'Secondary navigation area',
        'social'=>'Social links'
        )
    );
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 150, 150, true );

    $defaults = array(
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

    add_post_type_support( 'page', 'excerpt' );


    register_sidebar(array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    
}
add_action('after_setup_theme','custom_theme_setup');


function customTheme_script_enqueue(){
    wp_enqueue_style('bootstrapstyle', get_template_directory_uri()."/css/bootstrap.min.css", array(), "4.1.3", "all" );
    wp_enqueue_style('lightbox', "https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css", array(), "0.6.1", "all" );
    wp_enqueue_style('owlcarousel', get_template_directory_uri()."/css/owl.carousel.min.css", array(), "1.0.1", "all" );
    wp_enqueue_style('owlcarouseltheme', get_template_directory_uri()."/css/owl.theme.default.min.css", array(), "2.3.4", "all" );

    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Comfortaa:400,700|Lato", array(),'1.0.3', "all" );
    wp_enqueue_style('customstyle', get_template_directory_uri()."/css/ileys.css", array(), "1.0.1", "all" );


    wp_deregister_script('jquery');
    wp_enqueue_script( 'mce-view' );
    
    wp_enqueue_script('jquery', get_template_directory_uri() ."/js/jquery.min.js",array() , "3.3.1",true);
    wp_enqueue_script('jqueryui',get_template_directory_uri() . "/js/jquery-ui.min.js",array('jquery') ,'1.12.1', true);
    wp_enqueue_script('popperjs', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js",array() , "1.0.0",true);
    wp_enqueue_script('bootstrapjs',get_template_directory_uri() . "/js/bootstrap.min.js",array('jquery','popperjs') ,'4.1.3', true);
    wp_enqueue_script('lightbox', "https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js",array('jquery','bootstrapjs') ,'0.6.1', true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . "/js/owl.carousel.min.js",array() ,'2.3.4', true);

    wp_enqueue_script('mainjs',get_template_directory_uri() . "/js/main.js",array('jquery') ,'1.0.0', true);

}

add_action('wp_enqueue_scripts','customTheme_script_enqueue');

function new_read_more($more){
    return '...';
}

add_filter('excerpt_more','new_read_more');

function ileys_post_data(){


    $posted_on = human_time_diff(get_the_time('U'),current_time('timestamp')) .'ago';
        $categories = get_the_category();
        $separator = ", ";
        $output = '';
        $i=1;

        if(!empty($categories)):
            if($i > 1): $output .=$separator; endif;
            foreach($categories as $category):
                $output .='<a href="'.esc_url(get_category_link($category->term_id)).'" alt="'.esc_attr('View all posts in %s',$category->name).'">'
                .esc_html($category->name).'</a>';
                $i++;
            endforeach;
        endif;
    return '<span class="posted-on"> Posted: <a href="'.esc_url(get_permalink()).'">'.$posted_on.'</a></span><span class="posted-in"> In: '.$output.'</span>';
}

function single_ileys_post_data(){


        $posted_on = human_time_diff(get_the_time('U'),current_time('timestamp')) .'ago';
            $categories = get_the_category();
            $separator = ", ";
            $output = '';
            $i=1;
    
            if(!empty($categories)):
                if($i > 1): $output .=$separator; endif;
                foreach($categories as $category):
                    $output .='<a href="'.esc_url(get_category_link($category->term_id)).'" alt="'.esc_attr('View all posts in %s',$category->name).'">'
                    .esc_html($category->name). '</a>';
                    $i++;
                endforeach;
            endif;
        return '<span class="single-posted-on float-right"> Posted: '.$posted_on.'</span><span class="single-posted-in float-left"> In: '.$output.'</span>';
 }

 if(!function_exists('exclude_category')):
     function exclude_category($query){
        if ( (!is_admin())  && $query->is_search() ):
         $cat = explode(",",esc_attr(get_theme_mod('ileys_exclude_posts')));
        
         $exclude= array();

         foreach($cat as $c):
            
            $exclude [] = get_cat_ID(esc_attr($c));
         endforeach;


            $query->set('post_type',  array('post','page','brands','trading'));
            
            if(!empty($exclude)):
                $query->set('category__not_in', $exclude);
            endif;
        endif;
     }
     add_action('pre_get_posts','exclude_category');
    endif;
 
if(!function_exists('get_thumbnail_default')):

    function get_thumbnail_default($num = 1){
        $output ='';
        if(has_post_thumbnail() && $num==1):
           $output = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        else:
            $attachments = get_posts(array(
                'post_type'=>'attachment',
                'posts_per_page'=> $num,
                'post_parent'=>get_the_ID()
            ));

            if($attachments && $num ==1):
                foreach($attachments as $attachment):
                    $output = wp_get_attachment_url($attachment->ID);
                endforeach;
            elseif($attachments && ($num > 1 || $num < 1)):
                $output = $attachments;
            endif;

        endif;
        return $output;
    }
endif;


function register_footer_widget(){
    register_sidebar(array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init','register_footer_widget');

// Register custom post types
function custom_post_type(){
    $brand_labels = array(
        'name'                => _x( 'Brands', 'Post Type General Name', 'ileystheme' ),
        'singular_name'       => _x( 'Brand', 'Post Type Singular Name', 'ileystheme' ),
        'menu_name'           => __( 'Brands', 'ileystheme' ),
        'parent_item_colon'   => __( 'Parent Brand', 'ileystheme' ),
        'all_items'           => __( 'All Brand', 'ileystheme' ),
        'view_item'           => __( 'View Brand', 'ileystheme' ),
        'add_new_item'        => __( 'Add New Brand', 'ileystheme' ),
        'add_new'             => __( 'Add New', 'ileystheme' ),
        'edit_item'           => __( 'Edit Brand', 'ileystheme' ),
        'update_item'         => __( 'Update Brand', 'ileystheme' ),
        'search_items'        => __( 'Search Brand', 'ileystheme' ),
        'not_found'           => __( 'Not Found', 'ileystheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ileystheme' ),
    );
         
    $args_brand = array(
        'label'               => __( 'brands', 'ileystheme' ),
        'description'         => __( 'Brand description', 'ileystheme' ),
        'labels'              => $brand_labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields','post-formats' ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );



    $trading_labels = array(
        'name'                => _x( 'Tradings', 'Post Type General Name', 'ileystheme' ),
        'singular_name'       => _x( 'Trading', 'Post Type Singular Name', 'ileystheme' ),
        'menu_name'           => __( 'Tradings', 'ileystheme' ),
        'parent_item_colon'   => __( 'Parent Trading Item', 'ileystheme' ),
        'all_items'           => __( 'All Trading Items', 'ileystheme' ),
        'view_item'           => __( 'View Trading Item', 'ileystheme' ),
        'add_new_item'        => __( 'Add New Trading Item', 'ileystheme' ),
        'add_new'             => __( 'Add New', 'ileystheme' ),
        'edit_item'           => __( 'Edit Trading Item', 'ileystheme' ),
        'update_item'         => __( 'Update Trading Item', 'ileystheme' ),
        'search_items'        => __( 'Search Trading Item', 'ileystheme' ),
        'not_found'           => __( 'Not Found', 'ileystheme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ileystheme' ),
    );
         
    $args_trading = array(
        'label'               => __( 'tradings', 'ileystheme' ),
        'description'         => __( 'Trading item description', 'ileystheme' ),
        'labels'              => $trading_labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'post-formats'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );

    register_post_type( 'brands', $args_brand );
    register_post_type( 'trading',$args_trading);
}
add_action( 'init', 'custom_post_type', 0 );


function get_all_embeds($content){

    
    $embedded = get_media_embedded_in_content( $content );

    $output = array();

    foreach($embedded as $e):
        if(preg_match( '/src="([^"]*)"/i', $e, $m )):
            $output []= $m[1];

        endif;

    endforeach;
    
    return $output;

}



require get_template_directory(). '/inc/walker.php';
require get_template_directory(). '/inc/customizer.php';


