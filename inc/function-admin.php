<?php
/*
  ##########

   Admin page

  #########
*/



function ileys_admin_page(){
    add_menu_page("Ileys Theme Options",'Ileys','manage_options','ileys_theme','ileys_create_page','
    dashicons-hammer',110);


    add_submenu_page("ileys_theme",'Ileys Settings','Settings','manage_options','ileys_theme','ileys_create_page');
    add_submenu_page("ileys_theme",'Custom CSS','Custom CSS','manage_options','ileys_theme_custom_css','ileys_custom_css');

    //Activate settings page

    add_action('admin_init','ileys_custom_settings');
}
add_action('admin_menu','ileys_admin_page');



function ileys_custom_settings(){

    add_settings_section(
    'ileys-social-options',
    'Social Links',
    'ileys_social_cb',
    'ileys_theme'
);
    
    
    add_settings_field(
    'option_fb', #unique Id
    'Facebook Link',        #Title to show
    'ileys_social_handler', #callback function
    'ileys_theme',          #page
    'ileys-social-options', #section id
    array(
        'option_fb',#arguments
        'facebook.com'
    )        
);
    add_settings_field(
        'option_tw', #unique Id
        'Twitter Link',        #Title to show
        'ileys_social_handler', #callback function
        'ileys_theme',          #page
        'ileys-social-options', #section id
        array(
            'option_tw', #arguments
            'twitter.com'
        )        
    );

    add_settings_field(
        'option_lin', #unique Id
        'Linkedin Link',        #Title to show
        'ileys_social_handler', #callback function
        'ileys_theme',          #page
        'ileys-social-options', #section id
        array(
            'option_lin', #arguments
            'linkedin.com'
        )        
    );    
    register_setting('ileys-settings-group','option_fb');
    register_setting('ileys-settings-group','option_tw');
    register_setting('ileys-settings-group','option_lin');


}
function ileys_social_handler($args){

    $social = esc_attr(get_option($args[0]));

    echo '<input type=text id= "'.$args[0].'"  name=  "'.$args[0].'" value="'.$social.'" placeholder=" ' . $args[1] .'">';
 
}


function ileys_social_cb() {
    echo 'Customize Social Links';
}


function ileys_create_page() {
    require_once (get_template_directory() .'/inc/templates/admin-template.php');

}


function ileys_settings_page(){

}


function ileys_custom_css(){

}