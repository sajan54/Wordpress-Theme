<?php 

$wp_customize->add_section('_themename_topbar_section', array(
    'title' => esc_html__('TopBar', '_themename'),
    'panel' => '_themename_header_panel',
));

$wp_customize->add_setting('_themename_topbar_display_toggle', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_topbar_display_toggle', array(
    'label' => esc_html__('Display', '_themename'),
    'description' => esc_html__('Hide or show the topbar using this option.', '_themename'),
    'section' => '_themename_topbar_section',
    'type' => 'checkbox',
    'settings' => '_themename_topbar_display_toggle',
    'priority'=> 1
)));