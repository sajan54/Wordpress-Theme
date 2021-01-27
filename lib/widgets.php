<?php 

add_action('widgets_init', '_themename_register_widget_areas');

function _themename_register_widget_areas(){
    register_sidebar(array(
        'id' => 'footer-widget',
        'name' => esc_html__('Footer Widget Area', '_themename'),
        'description' => esc_html__('This is the footer widget area.', '_themename'),
        'before_widget' => '<div id="%1$s" class="widget %2$s footer">',
        'after_widget' => '</div>',
    ));
}