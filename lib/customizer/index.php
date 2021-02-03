<?php

add_action('customize_register', '_themename_register_customization_options');

function _themename_register_customization_options($wp_customize){
    include 'googleFonts.php';
    include 'custom/toggleSwitch.php';
    include 'custom/textRadioButton.php';
    include 'custom/imageRadioButton.php';
    include 'custom/infoText.php';
    include 'custom/navText.php';
    include 'custom/fontAttributes.php';
    include 'custom/alphaColorPicker.php';
    include 'custom/rangeControl.php';

    $wp_customize->remove_control('blogdescription');

    $wp_customize->add_panel('_themename_header_panel', array(
        'title'=>esc_html__( 'RB Header', '_themename'),
        'description' => esc_html__('You can change your header settings here.', '_themename'),
        'priority' => 5,
    ));

    $wp_customize->add_panel('_themename_color_panel', array(
        'title'=>esc_html__( 'RB Color', '_themename'),
        'description' => esc_html__('You can change your color settings here.', '_themename'),
        'priority' => 6,
    ));

    $wp_customize->add_panel('_themename_typography_panel', array(
        'title'=>esc_html__( 'RB Typography', '_themename'),
        'description' => esc_html__('You can change your typography settings here.', '_themename'),
        'priority' => 7,
    ));

    $wp_customize->add_panel('_themename_slider_banner_panel', array(
        'title'=>esc_html__( 'Slider & Banner', '_themename'),
        'description' => esc_html__('You can sider and banner settings here.', '_themename'),
        'priority' => 8,
    ));

    include 'topbar.php';
    include 'header.php';
    include 'slider.php';
    include 'slider-content.php';
    include 'newsletter.php';
    include 'footer.php';
    include 'color/index.php';
    include 'typography/index.php';
}