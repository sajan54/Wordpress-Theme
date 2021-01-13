<?php

$wp_customize->add_section('_themename_footer_section', array(
    'title' => esc_html__('RB Footer', '_themename'),
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
    '3' => 'Layout 3',
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

$wp_customize->add_setting( '_themename_footer_top_backgroundcolor' , array(
    'default'     => '#FFF7F7',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_footer_top_backgroundcolor', array(
    'label'        => esc_html__('Footer Top Background Color', '_themename'),
    'section'    => '_themename_footer_section',
    'priority'  => 3,
    'settings'   => '_themename_footer_top_backgroundcolor',
    'active_callback'=>function(){
        return get_theme_mod('_themename_footer_display_toggle') === 'show';
    }
) ) );

$wp_customize->add_setting( '_themename_footer_bottom_backgroundcolor' , array(
    'default'     => '#FFECEC',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_footer_bottom_backgroundcolor', array(
    'label'        => esc_html__('Footer Bottom Background Color', '_themename'),
    'section'    => '_themename_footer_section',
    'priority'  => 4,
    'settings'   => '_themename_footer_bottom_backgroundcolor',
    'active_callback'=>function(){
        return get_theme_mod('_themename_footer_display_toggle') === 'show';
    }
) ) );

$wp_customize->add_setting('_themename_footer_designedby_text', array(
    'default' => '@2020 - NeatBlog. All Right Reserved. Designed And Developed By NeatBlog',
    'sanitize_callback' => 'sanitize_text_field',
));
  
$wp_customize->add_control('_themename_footer_designedby_text', array(
    'type' => 'text',
    'section' => '_themename_footer_section', 
    'label' => __( 'Footer Designed By Text' ),
    'priority'=> 5,
    'active_callback'=>function(){
        return get_theme_mod('_themename_footer_display_toggle') === 'show'
            && get_theme_mod('_themename_footer_layout_options') === '1';
    }
));


$wp_customize->add_setting( '_themename_footer_font_color' , array(
    'default'     => '#828282',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_footer_font_color', array(
    'label'        => esc_html__('Font Color', '_themename'),
    'section'    => '_themename_footer_section',
    'priority'  => 6,
    'settings'   => '_themename_footer_font_color',
    'active_callback'=>function(){
        return get_theme_mod('_themename_footer_display_toggle') === 'show';
    }
) ) );

$wp_customize->add_setting('_themename_footer_logo_control', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    ));
    
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, '_themename_footer_logo_control', array(
    'label' => __( 'Edit Logo', 'theme-slug' ),
    'section' => '_themename_footer_section',
    'settings' => '_themename_footer_logo_control',
    'priority' => 7,
    'active_callback'=>function(){
        return get_theme_mod('_themename_footer_display_toggle') === 'show';
    }
) ) );

$wp_customize->add_setting('_themename__footer_top_text', array(
    'default' => 'Neatblog is a WordPress Theme for blog, designed and developed by NeatDesign. This is a powerful theme with tons of options, which help you easily create/edit your Websites in minutes. You can use this WordPress Theme for every purposes.',
    'sanitize_callback' => 'sanitize_text_field',
));
  
$wp_customize->add_control('_themename__footer_top_text', array(
    'type' => 'textarea',
    'section' => '_themename_footer_section', 
    'label' => __( 'Footer Top Text' ),
    'priority'=> 8,
    'active_callback'=>function(){
        return get_theme_mod('_themename_footer_display_toggle') === 'show'
            && get_theme_mod('_themename_footer_layout_options') === '1';
    }
));

$wp_customize->add_setting('_themename_footer_instagram_link', array(
    'default' => '#',
    'sanitize_callback' => 'sanitize_url',
));
  
$wp_customize->add_control('_themename_footer_instagram_link', array(
    'type' => 'text',
    'section' => '_themename_footer_section', 
    'label' => __( 'Instagram Link' ),
    'priority'=> 7,
));

$wp_customize->add_setting('_themename_footer_twitter_link', array(
    'default' => '#',
    'sanitize_callback' => 'sanitize_url',
));
  
$wp_customize->add_control('_themename_footer_twitter_link', array(
    'type' => 'text',
    'section' => '_themename_footer_section', 
    'label' => __( 'Twitter Link' ),
    'priority'=> 8,

));

$wp_customize->add_setting('_themename_footer_facebook_link', array(
    'default' => '#',
    'sanitize_callback' => 'sanitize_url',
));
  
$wp_customize->add_control('_themename_footer_facebook_link', array(
    'type' => 'text',
    'section' => '_themename_footer_section', 
    'label' => __( 'Facebook Link' ),
    'priority'=> 9,
));

$wp_customize->add_setting( '_themename_footer_social_icon_bg_color' , array(
    'default'     => '#333333',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_themename_footer_social_icon_bg_color', array(
    'label'        => esc_html__('Social Icon Color', '_themename'),
    'section'    => '_themename_footer_section',
    'priority'  => 10,
    'settings'   => '_themename_footer_social_icon_bg_color',
) ) );