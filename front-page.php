<?php 

/*

Front page section of the website

*/
?>
<?php  get_header();
$ileys_theme_sections = array(  'about', 'product', 'trading', 'partners','promotional',  );    

if(!is_home() && is_front_page()){

    foreach($ileys_theme_sections as $sections){
        get_template_part('inc/sections/'.esc_attr($sections));
    }
}

get_footer();