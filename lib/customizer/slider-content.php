<?php

$wp_customize->add_section('_themename_slider_content_section', array(
    'title' => esc_html__('Slider & Banner Content', '_themename'),
    'panel' => '_themename_slider_banner_panel',
));

$wp_customize->add_setting('_themename_slider_content_goto_section', array());
$wp_customize->add_control(new NavText_Control($wp_customize, '_themename_slider_content_goto_section', array(
    'label'    => esc_html__('Go To:','_themename'),
    'description' => '
        <a href="#" class="customizer_internal_links" 
        data-link="_themename_typography_slider_banner_section" data-link_type ="section" >
        Typography</a> &nbsp;/&nbsp;
        <a href="#" class="customizer_internal_links" 
        data-link="_themename_color_slider_banner_section" data-link_type ="section" >
         Color</a> &nbsp;/&nbsp;
         <a href="#" class="customizer_internal_links" 
         data-link="_themename_slider_section" data-link_type ="section" >
          Layout</a>
    ',
    'settings' => '_themename_slider_goto_section',
    'section'  => '_themename_slider_content_section',
    'priority' => 1,
    'type' => 'nav_text',
)));


$wp_customize->add_setting('_themename_slider_category_display', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_category_display', array(
    'label' => esc_html__('Display Category', '_themename'),
    'description' => esc_html__('Show/Hide category name.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_category_display',
    'priority'=> 5,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_category_seperator_display', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_category_seperator_display', array(
    'label' => esc_html__('Category Seperator', '_themename'),
    'description' => esc_html__('Multiple category are sperated by comma(,). Show/hide the 
    seperator using this setting.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_category_seperator_display',
    'priority'=> 5,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true)
            && get_theme_mod('_themename_slider_category_display', true);
    },
)));



$wp_customize->add_setting('_themename_slider_title_display', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_title_display', array(
    'label' => esc_html__('Display Title', '_themename'),
    'description' => esc_html__('Show/Hide the title.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_title_display',
    'priority'=> 6,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_date_display', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_date_display', array(
    'label' => esc_html__('Display Date', '_themename'),
    'description' => esc_html__('Show/Hide the date.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_date_display',
    'priority'=> 7,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_min_read_display', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_min_read_display', array(
    'label' => esc_html__('Min Read Info', '_themename'),
    'description' => esc_html__('Show/Hide the min read info (e.g 8 min read) post attribute. This setting 
    only gets reflected in slider/banner layout that contain the min read info, all layouts donot have the min read info.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_min_read_display',
    'priority'=> 8,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_comments_display', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_comments_display', array(
    'label' => esc_html__('Comments', '_themename'),
    'description' => esc_html__('Show/Hide the comments count post (e.g 5 comments) attribute. This setting 
    only gets reflected in slider/banner layout that contain the post count, all layouts donot have post counts.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_comments_display',
    'priority'=> 9,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_read_more_button_display', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_read_more_button_display', array(
    'label' => esc_html__('Read More Button', '_themename'),
    'description' => esc_html__('Show/Hide the read more button. This setting 
    only gets reflected in slider/banner layout that contain the read more  button, all layouts donot have read more button.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_read_more_button_display',
    'priority'=> 10,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));


$wp_customize->add_setting('_themename_slider_read_more_button_text', array(
    'default' => 'Read More',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('_themename_slider_read_more_button_text', array(
    'label' => esc_html__('Read More Button Text', '_themename'),
    'description' => esc_html__('Enter the text for read more button. This setting 
    only gets reflected in slider/banner layout that contain the read more button, all layouts donot have read more button.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'text',
    'priority'=> 10,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true)
            && get_theme_mod('_themename_slider_read_more_button_display', true);
    },
));


$wp_customize->add_setting('_themename_slider_author_display', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_author_display', array(
    'label' => esc_html__('Author', '_themename'),
    'description' => esc_html__('Show/Hide author name.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_author_display',
    'priority'=> 10,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
)));

$wp_customize->add_setting('_themename_slider_author_image_display', array(
    'default' => true,
    'sanitize_callback' => '_themename_sanitize_display_toggle',
));
$wp_customize->add_control(new ToggleSwitch($wp_customize, '_themename_slider_author_image_display', array(
    'label' => esc_html__('Author Image', '_themename'),
    'description' => esc_html__('Show/Hide author name. This setting 
     only gets reflected in slider/banner layout that contain the author image, all layouts donot have author image.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'checkbox',
    'settings' => '_themename_slider_author_image_display',
    'priority'=> 10,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true)
        &&  get_theme_mod('_themename_slider_author_display', true);
    },
)));

$order_option = array(
    'DESC' => 'Descending',
    'ASC' => 'Ascending',
);
$wp_customize->add_setting('_themename_slider_banner_post_order', array(
    'default' => 'DESC',
    'sanitize_callback' => function ($input) use ($order_option) {
        return  _themename_sanitize_choices($input, $order_option, 'DESC'); 
    }
));
$wp_customize->add_control('_themename_slider_banner_post_order', array(
    'label' => esc_html__('Select Order', '_themename'),
    'description' => esc_html__('Select the order to show posts. The default value is descending, which retrieves
    your latest post.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'select',
    'choices' => $order_option,
    'priority' => 12,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true);
    },
));

$wp_customize->add_setting('_themename_slider_banner_no_of_posts', array(
    'default' => 5,
    'sanitize_callback' => function ($input) {
        return  _themename_sanitize_integer($input, 5); 
    }
));
$wp_customize->add_control('_themename_slider_banner_no_of_posts', array(
    'label' => esc_html__('No of posts to show', '_themename'),
    'description' => esc_html__('Enter the number of posts to show. This setting only applies for sliders.', '_themename'),
    'section' => '_themename_slider_content_section',
    'type' => 'text',
    'priority'=> 13,
    'active_callback' => function(){
        return get_theme_mod('_themename_slider_or_banner_display_toggle', true)
        && get_theme_mod('_themename_slider_banner_option', 'slider') === 'slider';
    },
));