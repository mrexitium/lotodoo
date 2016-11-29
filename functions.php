<?php
// BASIC
show_admin_bar(false);
register_nav_menu('main_menu', __('Mainmenu'));


if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));
  
}


// WIDGET AREAS
register_sidebar(array('name' => __( 'WidgetArea' ), 'id' => 'widgetarea' ));




?>