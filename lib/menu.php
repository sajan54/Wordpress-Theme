<?php

add_action('init', '_themename_register_menus');

function _themename_register_menus(){
    register_nav_menus(array(
        'main-menu' => esc_html__('Main Navigation Menu', '_themename'),
        'topbar-menu' => esc_html__('TopBar Navigation Menu', '_themename')
    ));
}
