<?php 

function _themename_assets(){
    wp_enqueue_style('_themename-stylesheet', get_template_directory_uri().'/dist/assets/css/bundle.css',
        array(), '1.0.0', 'all');
    wp_enqueue_script('_themename-scripts', get_template_directory_uri().'/dist/assets/js/bundle.js',
        array('jquery'), '1.0.0', true);
    wp_enqueue_script('_themename-fontawesome', '//kit.fontawesome.com/3277162ec3.js', array(), '1.0.0', true);
}

function _themename_admin_assets(){
    wp_enqueue_style('_themename-admin-stylesheet', get_template_directory_uri().'/dist/assets/css/admin.css',
        array(), '1.0.0', 'all');
    wp_enqueue_script('_themename-admin-scripts', get_template_directory_uri().'/dist/assets/js/admin.js',
        array(), '1.0.0', true);
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri().'/dist/assets/js/colorpicker.min.js', array('wp-color-picker'));
}

function _themename_customizer_assets(){
    wp_enqueue_script(
        '_themename-customizer-script', get_template_directory_uri().'/dist/assets/js/customize-preview.js',
        array('jquery', 'customize-preview'), true
    );
    wp_enqueue_style('_themename-customizer-preview-style', get_template_directory_uri().'/dist/assets/css/customize-preview.css',
        array(), '1.0.0', 'all');
}

function _themename_customizer_control_assets(){
    wp_enqueue_style('_themename-customizer-style', get_template_directory_uri().'/dist/assets/css/customize-controls.css',
        array(), '1.0.0', 'all');
    wp_enqueue_script(
        '_themename-customizer-script', get_template_directory_uri().'/dist/assets/js/customize-controls.js',
        array('jquery','customize-preview'), true
    );
}


add_action('wp_enqueue_scripts', '_themename_assets');
add_action('admin_enqueue_scripts', '_themename_admin_assets');
add_action('customize_preview_init', '_themename_customizer_assets');
add_action('customize_controls_enqueue_scripts', '_themename_customizer_control_assets');
