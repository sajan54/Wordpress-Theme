<?php

$wp_customize->add_setting('_themename_header_slider_banner_goto', array());
$wp_customize->add_control(new NavText_Control($wp_customize, '_themename_header_slider_banner_goto', array(
    'label'    => esc_html__('Go To:','_themename'),
    'description' => '
        <a href="#" class="customizer_internal_links" 
        data-link="_themename_slider_section" data-link_type ="section" >
        Settings</a> &nbsp;/&nbsp;
        <a href="#" class="customizer_internal_links" 
        data-link="_themename_color_slider_banner_section" data-link_type ="section" >
         Color</a> &nbsp;/&nbsp;
         <a href="#" class="customizer_internal_links" 
         data-link="_themename_slider_content_section" data-link_type ="section" >
          Content</a>
    ',
    'settings' => '_themename_header_slider_banner_goto',
    'section'  => '_themename_typography_slider_banner_section',
    'priority' => 1,
    'type' => 'nav_text', 
)));

$wp_customize->add_setting('_themename_slider_category_font_attributes', array(
    'default' => 'Montserrat|14|normal|normal|none|1|0',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => function($input) use($googlefonts, $font_weights, $font_styles, $text_transform) {
        return _themename_sanitize_font_attributes(
            $input,
            array($googlefonts, $font_weights, $font_styles, $text_transform), 
            'Montserrat|14|normal|normal|none|1|0'
        );
    }
));

$wp_customize->add_control(new FontAttributes($wp_customize, '_themename_slider_category_font_attributes', array(
    'label' => esc_html__('Category Font Options', '_themename'),
    'description' => esc_html__('You can change font setting for category names here. 
    Some design options maynot show category names, for such design options this setting will not reflect any changes.', '_themename'),
    'section' => '_themename_typography_slider_banner_section',
    'settings' => '_themename_slider_category_font_attributes',
    'priority'=> 2,
    'type' => 'font_attributes',
    'choices' => array($googlefonts, $font_weights, $font_styles, $text_transform),
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_title_font_attributes', array(
    'default' => 'Montserrat|14|normal|normal|none|1|0',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => function($input) use($googlefonts, $font_weights, $font_styles, $text_transform) {
        return _themename_sanitize_font_attributes(
            $input,
            array($googlefonts, $font_weights, $font_styles, $text_transform), 
            'Montserrat|14|normal|normal|none|1|0'
        );
    }
));
$wp_customize->add_control(new FontAttributes($wp_customize, '_themename_slider_title_font_attributes', array(
    'label' => esc_html__('Title Font Options', '_themename'),
    'description' => esc_html__('You can change font setting for title here. 
    Some design options maynot show titles, for such design options this setting will not reflect any changes.', '_themename'),
    'section' => '_themename_typography_slider_banner_section',
    'settings' => '_themename_slider_title_font_attributes',
    'priority'=> 3,
    'type' => 'font_attributes',
    'choices' => array($googlefonts, $font_weights, $font_styles, $text_transform),
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_post_attributes_font_attributes', array(
    'default' => 'Montserrat|14|normal|normal|none|1|0',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => function($input) use($googlefonts, $font_weights, $font_styles, $text_transform) {
        return _themename_sanitize_font_attributes(
            $input,
            array($googlefonts, $font_weights, $font_styles, $text_transform), 
            'Montserrat|14|normal|normal|none|1|0'
        );
    }
));
$wp_customize->add_control(new FontAttributes($wp_customize, '_themename_slider_post_attributes_font_attributes', array(
    'label' => esc_html__('Post Attributes (Date, Min Read, Comments) Font Options', '_themename'),
    'description' => esc_html__('You can change font setting for post attributes such as 
    date, min read, number of comments or likes etc. . 
    Some design options maynot show these post attributes at all and some may only show few of them
    , this setting will apply to cases where there is atleast on post attribute.', '_themename'),
    'section' => '_themename_typography_slider_banner_section',
    'settings' => '_themename_slider_post_attributes_font_attributes',
    'priority'=> 3,
    'type' => 'font_attributes',
    'choices' => array($googlefonts, $font_weights, $font_styles, $text_transform),
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_read_more_button_font_attributes', array(
    'default' => 'Montserrat|14|normal|normal|none|1|0',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => function($input) use($googlefonts, $font_weights, $font_styles, $text_transform) {
        return _themename_sanitize_font_attributes(
            $input,
            array($googlefonts, $font_weights, $font_styles, $text_transform), 
            'Montserrat|14|normal|normal|none|1|0'
        );
    }
));
$wp_customize->add_control(new FontAttributes($wp_customize, '_themename_slider_read_more_button_font_attributes', array(
    'label' => esc_html__('Read More Text Font Options', '_themename'),
    'description' => esc_html__('You can change font setting for the read more text. 
    Some design options maynot contain the read more text, for such design options this setting will not reflect any changes.', '_themename'),
    'section' => '_themename_typography_slider_banner_section',
    'settings' => '_themename_slider_read_more_button_font_attributes',
    'priority'=> 4,
    'type' => 'font_attributes',
    'choices' => array($googlefonts, $font_weights, $font_styles, $text_transform),
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_author_by_font_attributes', array(
    'default' => 'Montserrat|14|normal|normal|none|1|0',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => function($input) use($googlefonts, $font_weights, $font_styles, $text_transform) {
        return _themename_sanitize_font_attributes(
            $input,
            array($googlefonts, $font_weights, $font_styles, $text_transform), 
            'Montserrat|14|normal|normal|none|1|0'
        );
    }
));
$wp_customize->add_control(new FontAttributes($wp_customize, '_themename_slider_author_by_font_attributes', array(
    'label' => esc_html__('Author prefix (by) Font Options', '_themename'),
    'description' => esc_html__('You can change font setting for the text \'by\' here. 
    Only few design options contain the \'by\' text, for such design 
    options this setting will reflect changes.', '_themename'),
    'section' => '_themename_typography_slider_banner_section',
    'settings' => '_themename_slider_author_by_font_attributes',
    'priority'=> 5,
    'type' => 'font_attributes',
    'choices' => array($googlefonts, $font_weights, $font_styles, $text_transform),
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_author_name_font_attributes', array(
    'default' => 'Montserrat|14|normal|normal|none|1|0',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => function($input) use($googlefonts, $font_weights, $font_styles, $text_transform) {
        return _themename_sanitize_font_attributes(
            $input,
            array($googlefonts, $font_weights, $font_styles, $text_transform), 
            'Montserrat|14|normal|normal|none|1|0'
        );
    }
));
$wp_customize->add_control(new FontAttributes($wp_customize, '_themename_slider_author_name_font_attributes', array(
    'label' => esc_html__('Author Font Options', '_themename'),
    'description' => esc_html__('You can change font setting for authore names here. 
    Some design options maynot show author names, for such design options this setting will not reflect any changes.', '_themename'),
    'section' => '_themename_typography_slider_banner_section',
    'settings' => '_themename_slider_author_name_font_attributes',
    'priority'=> 6,
    'type' => 'font_attributes',
    'choices' => array($googlefonts, $font_weights, $font_styles, $text_transform),
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));