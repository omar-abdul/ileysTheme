<?php
/*
  ##########
   Admin page
  #########
*/

function ileys_admin_page(){
    add_menu_page("Ileys Theme Options",'Ileys','manage_options','ileys-theme','ileys_create_page','
    dashicons-hammer',110);
}
add_action('admin_menu','ileys_admin_page');

function ileys_create_page() {

}