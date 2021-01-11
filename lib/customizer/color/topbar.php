<?php

$wp_customize->add_setting('_themename_topbar_bg_color', array(
    'default' => '#F5F5F5',
    'sanitize_callback' => function($input){return _themename_sanitize_rgba_color($input, '#F5F5F5');}
));
$wp_customize->add_control(new AlphaColorPicker_Control(
    $wp_customize,
    '_themename_topbar_bg_color',
    array(
        'label'    => esc_html__('Background Color','_themename'),
        'settings' => '_themename_topbar_bg_color',
        'section'  => '_themename_color_topbar_section',
        'priority' => 1,
        'type' => 'alpha_color',
        'active_callback' => function(){
            return get_theme_mod('_themename_topbar_display_toggle', true);
        },
    )
));