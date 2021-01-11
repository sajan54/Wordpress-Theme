<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <?php 
        $widget_with_font_options = [];
        $fonts_from_widget = [];
        foreach($widget_with_font_options as $widget){
            if(is_active_widget(false, false, $widget, true)){
                $widget_instances = get_option('widget_' . $widget);
                foreach($widget_instances as $instance){
                    if(isset($instance['mps_post_title_font_family'])){
                        array_push($fonts_from_widget, $instance['mps_post_title_font_family']);
                    }
                    if(isset($instance['mps_post_meta_font_family'])){
                        array_push($fonts_from_widget, $instance['mps_post_meta_font_family']);
                    }
                    if(isset($instance['category_font_family'])){
                        array_push($fonts_from_widget, $instance['category_font_family']);
                    }
                }
            }
        }
        $theme_mod_fonts = array(
            '_themename_topbar_font_attributes'
        );
        $theme_mod_fonts_list = array();
        foreach($theme_mod_fonts as $value){
            $family = explode('|', get_theme_mod($value))[0];
            if(!empty($family)) array_push($theme_mod_fonts_list, $family);
        }
        $google_fonts = array_unique(array_merge($theme_mod_fonts_list, $fonts_from_widget));
        $google_font_query_param = '';
        foreach($google_fonts as $family){
            if(!($family === 'Lora')) $google_font_query_param .= '&family='.$family;
        }
        if($google_font_query_param){
        ?>
            <link 
            href="https://fonts.googleapis.com/css2?<?php echo ltrim($google_font_query_param, '&'); ?>&display=swap" 
            rel="stylesheet">
        <?php
        }
        ?>
</head>
<?php if(get_theme_mod('_themename_topbar_display_toggle', true)){ ?>
    <?php get_template_part('template-parts/topbar'); ?>
<?php } ?>
<body>