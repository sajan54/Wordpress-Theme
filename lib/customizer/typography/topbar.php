<?php

$wp_customize->add_setting('_themename_topbar_font_attributes', array(
    'default' => 'Montserrat|14|normal|normal|none|3|0',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => function($input) use($googlefonts, $font_weights, $font_styles, $text_transform) {
        return _themename_sanitize_font_attributes(
            $input,
            array($googlefonts, $font_weights, $font_styles, $text_transform), 
            'Montserrat|14|normal|normal|none|3|0'
        );
    }
));
$wp_customize->add_control(new FontAttributes($wp_customize, '_themename_topbar_font_attributes', array(
    'label' => esc_html__('Font Options', '_themename'),
    'section' => '_themename_typo_topbar_section',
    'settings' => '_themename_topbar_font_attributes',
    'priority'=> 2,
    'type' => 'font_attributes',
    'choices' => array($googlefonts, $font_weights, $font_styles, $text_transform),
    'active_callback' => function(){
        return get_theme_mod('_themename_topbar_display_toggle', true);
    },
)));