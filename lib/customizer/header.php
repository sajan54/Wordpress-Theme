<?php

$wp_customize->add_section('_themename_header_section', array(
    'title' => esc_html__('Header', '_themename'),
    'panel' => '_themename_header_panel',
));

$wp_customize->add_setting('_themename_header_display_toggle', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_header_display_toggle', array(
    'label' => esc_html__('Display', '_themename'),
    'description' => esc_html__('Hide or show the header using this option.', '_themename'),
    'section' => '_themename_header_section',
    'type' => 'checkbox',
    'settings' => '_themename_header_display_toggle',
    'priority'=> 1
)));

$wp_customize->add_setting('_themename_header_logo_control', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_themename_header_logo_control', array(
    'label' => __( 'Edit Logo', 'theme-slug' ),
    'section' => '_themename_header_section',
    'settings' => '_themename_header_logo_control',
    'priority' => 2,
) ) );

$wp_customize->add_setting('_themename_header_border_bottom', array(
    'default' => true,
));

$wp_customize->add_control('_themename_header_border_bottom', array(
    'label' => esc_html__('header Border Bottom', '_themename'),
    'section' => '_themename_header_section',
    'type' => 'checkbox',
    'settings' => '_themename_header_border_bottom',
    'priority'=> 3,
));

$wp_customize->add_setting('_themename_header_border_radius', array(
    'default' => 5,
    'sanitize_callback' => function($input){return _themename_sanitize_decimal($input, 1);},
));

$wp_customize->add_control('_themename_header_border_radius', array(
    'label' => esc_html__('header Border Radius', '_themename'),
    'description' => esc_html__('How thick do you want the border to be ?', '_themename'),
    'section' => '_themename_header_section',
    'type' => 'text',
    'priority'=> 4,
));

$border_styles = array(
    'none' => 'None',
    'dotted' => 'Dotted',
    'solid' => 'Solid',
    'double' => 'Double',
    'groove' => 'Groove',
);

$wp_customize->add_setting('_themename_header_border_style', array(
    'default' => 'none',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => function ($input) use ($border_styles) {
        return  _themename_sanitize_choices($input, $border_styles, 'none');
    }
));
$wp_customize->add_control('_themename_header_border_style', array(
    'label' => esc_html__('Border Top Style', '_themename'),
    'description' => esc_html__('The style for your border. Switch between various styles to find your fit.', '_themename'),
    'section' => '_themename_header_section',
    'type' => 'select',
    'choices' => $border_styles,
    'priority'=> 5,
));

$wp_customize->add_setting( '_themename_header_border_color' , array(
    'default'     => '#F2F2F2',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_header_border_color', array(
    'label'        => esc_html__('Border Color', '_themename'),
    'section'    => '_themename_header_section',
    'settings'   => '_themename_header_border_color',
    'priority'   => 6,
)) );
