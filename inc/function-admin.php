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
    register_setting('ileys-settings-group','first_name');

    add_settings_section('ileys-sidebar-options','Sidebar Options','ileys_sidebar_options','ileys_theme');
    add_settings_field('ileys-sidebar-field','First name','ileys_sidebar_name','ileys_theme','ileys-sidebar-options');


}
function ileys_sidebar_name(){
    $firstName = esc_attr(get_option('first_name'));
    echo '<input type=text name="first_name" value="'.$firstName.'" placeholder="">';
}


function ileys_sidebar_options() {
    echo 'Customize sidebar';
}


function ileys_create_page() {
    require_once (get_template_directory() .'/inc/templates/admin-template.php');

}


function ileys_settings_page(){

}


function ileys_custom_css(){

}