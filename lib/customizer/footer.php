<?php

$wp_customize->add_section('_themename_footer_section', array(
    'title' => esc_html__('Footer', '_themename'),
    'priority'=>1
));

$footer_display_toggle = array(
    'show' => 'Show',
    'hide' => 'Hide',
);

$wp_customize->add_setting('_themename_footer_display_toggle', array(
    'default' => 'show',
    'sanitize_callback' => function ($input) use ($footer_display_toggle) {
        return  _themename_sanitize_choices($input, $footer_display_toggle, 'show'); 
    }
));

$wp_customize->add_control('_themename_footer_display_toggle', array(
    'label' => esc_html__('Display Footer', '_themename'),
    'section' => '_themename_footer_section',
    'priority'=> 1,
    'type'    => 'select',
    'choices' => $footer_display_toggle
));


$footer_layout_options = array(
    '1' => 'Layout 1',
    '2' => 'Layout 2',
);


$wp_customize->add_setting('_themename_footer_layout_options', array(
    'default' => '1',
    'sanitize_callback' => function ($input) use ($footer_layout_options) {
        return  _themename_sanitize_choices($input, $footer_layout_options, '1'); 
    }
));

$wp_customize->add_control('_themename_footer_layout_options', array(
    'label' => esc_html__('Display Footer', '_themename'),
    'section' => '_themename_footer_section',
    'priority'=> 2,
    'type'    => 'select',
    'choices' => $footer_layout_options,
));