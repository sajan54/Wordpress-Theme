<?php

$wp_customize->add_section('_themename_slider_section', array(
    'title' => esc_html__('Slider & Banner Layout', '_themename'),
    'panel' => '_themename_slider_banner_panel',
));

$wp_customize->add_setting('_themename_slider_goto_section', array());
$wp_customize->add_control(new NavText_Control($wp_customize, '_themename_slider_goto_section', array(
    'label'    => esc_html__('Go To:','_themename'),
    'description' => '
        <a href="#" class="customizer_internal_links" 
        data-link="_themename_typography_slider_banner_section" data-link_type ="section" >
        Typography</a> &nbsp;/&nbsp;
        <a href="#" class="customizer_internal_links" 
        data-link="_themename_color_slider_banner_section" data-link_type ="section" >
         Color</a> &nbsp;/&nbsp;
         <a href="#" class="customizer_internal_links" 
         data-link="_themename_slider_content_section" data-link_type ="section" >
          Content</a>
    ',
    'settings' => '_themename_slider_goto_section',
    'section'  => '_themename_slider_section',
    'priority' => 1,
    'type' => 'nav_text',
)));

$wp_customize->add_setting('_themename_slider_or_banner_display_toggle', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_or_banner_display_toggle', array(
    'label' => esc_html__('Display', '_themename'),
    'description' => esc_html__('Hide or show the slider/banner section using this option.', '_themename'),
    'section' => '_themename_slider_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_or_banner_display_toggle',
    'priority'=> 1
)));

$slider_options = array(
        'full-width' => 'Full Width',
        'center' => 'Center Slider',
        'grid2' => '2-Grid',
        'grid3' => '3-Grid',
        'grid4' => '4-Grid',
    );

    $slider_options = array(
        'full-width' => 'Full Width',
        'center' => 'Center Slider',
        'grid2' => '2-Grid',
        'grid3' => '3-Grid',
        'grid4' => '4-Grid',
    );

$slider_opt_desc = esc_html__('Select the slider design/layout you want. The default layout is full width slider.', '_themename');
    $slider_opt_desc = esc_html__('Select the slider design/layout you want. 
    The default layout is full width slider.(The Pro version has additonal 4 more slider options.)', '_themename');


$wp_customize->add_setting('_themename_slider_option', array(
    'default' => 'full-width',
    'sanitize_callback' => function ($input) use ($slider_options) {
        return  _themename_sanitize_choices($input, $slider_options, 'full-width'); 
    }
));
$wp_customize->add_control('_themename_slider_option', array(
    'label' => esc_html__('Select Slider', '_themename'),
    'description' => $slider_opt_desc,
    'section' => '_themename_slider_section',
    'type' => 'select',
    'choices' => $slider_options,
    'priority' => 3,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
));

$wp_customize->add_setting('_themename_slider_margin_top', array(
    'default' => 0,
    'sanitize_callback' => function($input){return _themename_sanitize_decimal($input, 0);}
));

$wp_customize->add_control('_themename_slider_margin_top', array(
    'label' => esc_html__('Margin Top', '_themename'),
    'description' => esc_html__('You can set the margin on top (sapcing on top) in pixel. Eg: 5px, 15px etc. The default has been set as 0px.', '_themename'),
    'section' => '_themename_slider_section',
    'type' => 'number',
    'priority'=> 5,
    'active_callback' => function(){    
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
));


$wp_customize->add_setting('_themename_slider_speed', array(
    'default' =>  10,
    'sanitize_callback' => function($input){return _themename_sanitize_integer($input, 10);}
));
$wp_customize->add_control(new RangeControl($wp_customize, '_themename_slider_speed', array(
    'label' => esc_html__('Slider Speed', '_themename'),
    'description' => esc_html__('Set the slider speed. The value you select is in seconds. The default value is 10 second.', '_themename'),
    'section' => '_themename_slider_section',
    'settings' => '_themename_slider_speed',
    'priority'=> 5,
    'input_attrs' => array(
        'min' => 3,
        'max' => 600,
        'default' => 10,
    ),
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_autoplay', array(
    'default' => false,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_autoplay', array(
    'label' => esc_html__('Autoplay', '_themename'),
    'description' => esc_html__('Enable/Disable the autoplay for slider. This setting only applies for sliders.', '_themename'),
    'section' => '_themename_slider_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_autoplay',
    'priority'=> 6,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));



