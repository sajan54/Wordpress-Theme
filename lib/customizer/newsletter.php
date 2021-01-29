<?php

$wp_customize->add_section('_themename_newsletter_section', array(
    'title' => esc_html__('RB Newsletter', '_themename'),
    'priority'=>1
));

$newsletter_display_toggle = array(
    'show' => 'Show',
    'hide' => 'Hide',
);

$wp_customize->add_setting('_themename_newsletter_display_toggle', array(
    'default' => 'show',
    'sanitize_callback' => function ($input) use ($newsletter_display_toggle) {
        return  _themename_sanitize_choices($input, $newsletter_display_toggle, 'show'); 
    }
));

$wp_customize->add_control('_themename_newsletter_display_toggle', array(
    'label' => esc_html__('Display Newsletter Section', '_themename'),
    'section' => '_themename_newsletter_section',
    'priority'=> 1,
    'type'    => 'select',
    'choices' => $newsletter_display_toggle
));

$wp_customize->add_setting( '_themename_newsletter_backgroundcolor' , array(
    'default'     => '#FFECEC',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_newsletter_backgroundcolor', array(
    'label'        => esc_html__('Newsletter Background Color', '_themename'),
    'section'    => '_themename_newsletter_section',
    'priority'  => 2,
    'settings'   => '_themename_newsletter_backgroundcolor',
    'active_callback'=>function(){
        return get_theme_mod('_themename_newsletter_display_toggle') === 'show';
    }
) ) );

$wp_customize->add_setting('_themename_newsletter_head_text', array(
    'default' => 'Subscribe to my Newsletter',
    'sanitize_callback' => 'sanitize_text_field',
));
  
$wp_customize->add_control('_themename_newsletter_head_text', array(
    'type' => 'text',
    'section' => '_themename_newsletter_section', 
    'label' => __( 'Newsletter Head Text' ),
    'priority'=> 3,
    'active_callback'=>function(){
        return get_theme_mod('_themename_newsletter_display_toggle') === 'show';
    }
));

$wp_customize->add_setting( '_themename_newsletter_head_font_color' , array(
    'default'     => '#666666',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_newsletter_head_font_color', array(
    'label'        => esc_html__('Newsletter Head Font Color', '_themename'),
    'section'    => '_themename_newsletter_section',
    'priority'  => 4,
    'settings'   => '_themename_newsletter_head_font_color',
    'active_callback'=>function(){
        return get_theme_mod('_themename_newsletter_display_toggle') === 'show';
    }
) ) );

$wp_customize->add_setting('_themename_newsletter_subhead_text', array(
    'default' => 'Join 7000+ people to get notifications about new recipes.',
    'sanitize_callback' => 'sanitize_text_field',
));
  
$wp_customize->add_control('_themename_newsletter_subhead_text', array(
    'type' => 'textarea',
    'section' => '_themename_newsletter_section', 
    'label' => __( 'Newsletter SubHead Text' ),
    'priority'=> 5,
    'active_callback'=>function(){
        return get_theme_mod('_themename_newsletter_display_toggle') === 'show';
    }
));

$wp_customize->add_setting( '_themename_newsletter_subhead_font_color' , array(
    'default'     => '#666666',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_newsletter_subhead_font_color', array(
    'label'        => esc_html__('Newsletter SubHead Font Color', '_themename'),
    'section'    => '_themename_newsletter_section',
    'priority'  => 6,
    'settings'   => '_themename_newsletter_subhead_font_color',
    'active_callback'=>function(){
        return get_theme_mod('_themename_newsletter_display_toggle') === 'show';
    }
) ) );

$wp_customize->add_setting('_themename_newsletter_button_text', array(
    'default' => 'SUBSCRIBE',
    'sanitize_callback' => 'sanitize_text_field',
));
  
$wp_customize->add_control('_themename_newsletter_button_text', array(
    'type' => 'text',
    'section' => '_themename_newsletter_section', 
    'label' => __( 'Newsletter Button Text' ),
    'priority'=> 7,
    'active_callback'=>function(){
        return get_theme_mod('_themename_newsletter_display_toggle') === 'show';
    }
));

$wp_customize->add_setting( '_themename_newsletter_button_color' , array(
    'default'     => '#D2C3BE',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_newsletter_button_color', array(
    'label'        => esc_html__('Newsletter Button Color', '_themename'),
    'section'    => '_themename_newsletter_section',
    'priority'  => 8,
    'settings'   => '_themename_newsletter_button_color',
    'active_callback'=>function(){
        return get_theme_mod('_themename_newsletter_display_toggle') === 'show';
    }
) ) );

