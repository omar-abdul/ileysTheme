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
    'ileys-slider-options',
    'Slider Options',
    'ileys_slider_cb',
    'ileys_theme'
);




add_settings_section(
    'ileys-social-options',
    'Social Links',
    'ileys_social_cb',
    'ileys_theme'
);




    

    //slider option fields  
    
    add_settings_field(
        'slider_image_1', #unique Id
        'Slider 1 Options',        #Title to show
        'ileys_slider_image_first', #callback function
        'ileys_theme',          #page
        'ileys-slider-options', #section id
        array(
            'slider_image_1', #arguments
            'upload-btn-1'

            
        )        
    ); 

    add_settings_field(
        'slider_image_2', #unique Id
        'Slider 2 Options',        #Title to show
        'ileys_slider_image_second', #callback function
        'ileys_theme',          #page
        'ileys-slider-options', #section id
        array(
            'slider_image_2' , #arguments
            'upload-btn-2'
        )        
    ); 

    add_settings_field(
        'slider_image_3', #unique Id
        'Slider 3 Options',        #Title to show
        'ileys_slider_image_third', #callback function
        'ileys_theme',          #page
        'ileys-slider-options', #section id
        array(
            'slider_image_3' , #arguments
            'upload-btn-3'
        )        
    ); 

    add_settings_field(
        'option_fb', #unique Id
        'Facebook Link',        #Title to show
        'ileys_fb_handler', #callback function
        'ileys_theme',          #page
        'ileys-social-options', #section id
        array(
            'option_fb',#arguments
            'facebook.com/page'
        )        
    );
        add_settings_field(
            'option_tw', #unique Id
            'Twitter Link',        #Title to show
            'ileys_twitter_handler', #callback function
            'ileys_theme',          #page
            'ileys-social-options', #section id
            array(
                'option_tw', #arguments
                '@user'
            )        
        );
    
        add_settings_field(
            'option_lin', #unique Id
            'Linkedin Link',        #Title to show
            'ileys_linkedin_handler', #callback function
            'ileys_theme',          #page
            'ileys-social-options', #section id
            array(
                'option_lin', #arguments
                'linkedin.com/profile'
            )        
        );     

    //register slider settings
    register_setting('ileys-settings-group','slider_image_1');
    register_setting('ileys-settings-group','slider_image_2');
    register_setting('ileys-settings-group','slider_image_3');
    
    register_setting('ileys-settings-group','slider_text_1');
    register_setting('ileys-settings-group','slider_text_2');
    register_setting('ileys-settings-group','slider_text_3');

    register_setting('ileys-settings-group','slider_sub_text_1');
    register_setting('ileys-settings-group','slider_sub_text_2');
    register_setting('ileys-settings-group','slider_sub_text_3');


    // Social links settings
    register_setting('ileys-settings-group','option_fb');
    register_setting('ileys-settings-group','option_tw','ileys_sanitize_twitter');
    register_setting('ileys-settings-group','option_lin');

}
function ileys_fb_handler($args){

    $social = esc_attr(get_option($args[0]));

    echo '<input type=text id= "'.$args[0].'"  name=  "'.$args[0].'" value="'.$social.'" placeholder=" ' . $args[1] .'">';
 
}
function ileys_twitter_handler($args){

    $social = esc_attr(get_option($args[0]));

    echo '<em>@</em><input type=text id= "'.$args[0].'"  name=  "'.$args[0].'" value="'.$social.'" placeholder=" ' . $args[1] .'">';
 
}

function ileys_sanitize_twitter($input){
    $output = sanitize_text_field($input);
    $output = str_replace('@','',$output);
    return $output;
}
function ileys_linkedin_handler($args){

    $social = esc_attr(get_option($args[0]));

    echo '<input type=text id= "'.$args[0].'"  name=  "'.$args[0].'" value="'.$social.'" placeholder=" ' . $args[1] .'">';
 
}


function ileys_social_cb() {
    echo 'Customize Social Links';
}

function ileys_slider_cb(){
    echo 'Customize Slider Options';
}

//Slider image callbacks 

function ileys_slider_image_first($args){
    $file = esc_attr(get_option($args[0]));
    $text = esc_attr(get_option('slider_text_1'));
    $subtext = esc_attr(get_option('slider_sub_text_1'));
    echo '<input type="button" class="button button-secondary" value = "Upload image" id="'.$args[1].'"><input type= "hidden" id= "'. $args[0] .'" name = "'. $args[0] .'"   value = "'. $file .'"><br/><textarea rows="4" cols="60" class="form-group" id ="slider_text_1" name = "slider_text_1" placeholder="slider text">'.$text.'</textarea><br/><textarea rows="4" cols="60" class="form-group" id ="slider_sub_text_1" name = "slider_sub_text_1" placeholder="slider text">'.$subtext.'</textarea>';
}

function ileys_slider_image_second($args){
    $file = esc_attr(get_option($args[0]));
    $text = esc_attr(get_option('slider_text_2'));
    $subtext = esc_attr(get_option('slider_sub_text_2'));

    echo '<input type="button" class="button button-secondary" value = "Upload image" id="'.$args[1].'"><input type= "hidden" id= "'. $args[0] .'" name = "'. $args[0] .'"   value = "'. $file .'"><br/><textarea rows="4" cols="60" class="form-group" id ="slider_text_2" name = "slider_text_2" placeholder="slider text">'.$text.'</textarea><br/><textarea rows="4" cols="60" class="form-group" id ="slider_sub_text_2" name = "slider_sub_text_2" placeholder="slider text">'.$subtext.'</textarea>';
}
function ileys_slider_image_third($args){
    $file = esc_attr(get_option($args[0]));
    $text = esc_attr(get_option('slider_text_3'));
    $subtext = esc_attr(get_option('slider_sub_text_3'));

    echo '<input type="button" class="button button-secondary" value = "Upload image" id="'.$args[1].'"><input type= "hidden" id= "'. $args[0] .'" name = "'. $args[0] .'"   value = "'. $file .'"><br/><textarea rows="4" cols="60" class="form-group" id ="slider_text_3" name = "slider_text_3" placeholder="slider text">'.$text.'</textarea><br/><textarea rows="4" cols="60" class="form-group" id ="slider_sub_text_3" name = "slider_sub_text_3" placeholder="slider text">'.$subtext.'</textarea>';
}

function ileys_create_page() {
    require_once (get_template_directory() .'/inc/templates/admin-template.php');

}


function ileys_settings_page(){

}


function ileys_custom_css(){

}