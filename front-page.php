<?php 

/*

Front page section of the website

*/
?>
<?php  get_header();
$ileys_theme_sections = array( 'banners', 'about', 'product', 'trading', 'promotional', 'partners', 'staff' );    

if(!is_home() && is_front_page()){
    foreach($ileys_theme_sections as $sections){
        get_template_part('template-parts/'.esc_attr($sections));
    }
}

get_footer();