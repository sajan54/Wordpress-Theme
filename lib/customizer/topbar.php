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

$wp_customize->add_setting('_themename_topbar_border_bottom', array(
    'default' => true,
));

$wp_customize->add_control('_themename_topbar_border_bottom', array(
    'label' => esc_html__('Topbar Border Bottom', '_themename'),
    'section' => '_themename_topbar_section',
    'type' => 'checkbox',
    'settings' => '_themename_topbar_border_bottom',
    'priority'=> 3,
));

$wp_customize->add_setting('_themename_topbar_border_radius', array(
    'default' => 5,
    'sanitize_callback' => function($input){return _themename_sanitize_decimal($input, 1);},
));

$wp_customize->add_control('_themename_topbar_border_radius', array(
    'label' => esc_html__('Topbar Border Radius', '_themename'),
    'description' => esc_html__('How thick do you want the border to be ?', '_themename'),
    'section' => '_themename_topbar_section',
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

$wp_customize->add_setting('_themename_topbar_border_style', array(
    'default' => 'none',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => function ($input) use ($border_styles) {
        return  _themename_sanitize_choices($input, $border_styles, 'none');
    }
));
$wp_customize->add_control('_themename_topbar_border_style', array(
    'label' => esc_html__('Border Top Style', '_themename'),
    'description' => esc_html__('The style for your border. Switch between various styles to find your fit.', '_themename'),
    'section' => '_themename_topbar_section',
    'type' => 'select',
    'choices' => $border_styles,
    'priority'=> 5,
));

$wp_customize->add_setting( '_themename_topbar_border_color' , array(
    'default'     => '#333333',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_topbar_border_color', array(
    'label'        => esc_html__('Border Color', '_themename'),
    'section'    => '_themename_topbar_section',
    'settings'   => '_themename_topbar_border_color',
    'priority'   => 6,
)) );

$wp_customize->add_setting('_themename_topbar_instagram_link', array(
    'default' => '#',
    'sanitize_callback' => 'sanitize_url',
));
  
$wp_customize->add_control('_themename_topbar_instagram_link', array(
    'type' => 'text',
    'section' => '_themename_topbar_section', 
    'label' => __( 'Instagram Link' ),
    'priority'=> 7,
));

$wp_customize->add_setting('_themename_topbar_twitter_link', array(
    'default' => '#',
    'sanitize_callback' => 'sanitize_url',
));
  
$wp_customize->add_control('_themename_topbar_twitter_link', array(
    'type' => 'text',
    'section' => '_themename_topbar_section', 
    'label' => __( 'Twitter Link' ),
    'priority'=> 8,

));

$wp_customize->add_setting('_themename_topbar_facebook_link', array(
    'default' => '#',
    'sanitize_callback' => 'sanitize_url',
));
  
$wp_customize->add_control('_themename_topbar_facebook_link', array(
    'type' => 'text',
    'section' => '_themename_topbar_section', 
    'label' => __( 'Facebook Link' ),
    'priority'=> 9,
));

$wp_customize->add_setting( '_themename_topbar_social_icon_color' , array(
    'default'     => '#333333',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_topbar_social_icon_color', array(
    'label'        => esc_html__('Social Icon Color', '_themename'),
    'section'    => '_themename_topbar_section',
    'priority'  => 10,
    'settings'   => '_themename_topbar_social_icon_color',
) ) );