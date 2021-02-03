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
    <style>
    <?php if(!get_theme_mod('_themename_slider_category_seperator_display', true)){ ?>
        .slider__category div:not(:last-child)::after{
            content: "";
        }
        <?php } ?>
        .slider__text{
            background: <?php echo esc_attr(get_theme_mod('_themename_slider_content_overlay_color', 'rgba(0, 0, 0, 0.6)'));?>;
        }

        .slider__wrapper{
            margin-top: <?php echo esc_attr(get_theme_mod('_themename_slider_margin_top', 0));?>px;
        }
        .slider__category{
            <?php 
             $slider_category_font = explode('|', get_theme_mod(
                 '_themename_slider_category_font_attributes', 'Montserrat|14|normal|normal|none|1|0')
                );
            ?>
            font-family: <?php echo esc_attr(str_replace('+', ' ', $slider_category_font[0])); ?>;
            font-size: <?php echo esc_attr($slider_category_font[1]); ?>px;
            font-weight: <?php echo esc_attr($slider_category_font[2]); ?>;
            font-style: <?php echo esc_attr($slider_category_font[3]);?>;
            text-transform: <?php echo esc_attr($slider_category_font[4]);?>;
            line-height: <?php echo esc_attr($slider_category_font[5]);?>;
            letter-spacing: <?php echo esc_attr($slider_category_font[6]);?>px;
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_category_color', '#ffffff'));?>;
        }
        .slider__category a:hover{
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_category_hover_color', '#ffffff')); ?>;
        }
        .slider__title{
            <?php 
             $slider_title_font = explode('|', get_theme_mod(
                 '_themename_slider_title_font_attributes', 'Montserrat|14|normal|normal|none|1|0')
                );
            ?>
            font-family: <?php echo esc_attr(str_replace('+', ' ', $slider_title_font[0])); ?>;
            font-size: <?php echo esc_attr($slider_title_font[1]); ?>px;
            font-weight: <?php echo esc_attr($slider_title_font[2]); ?>;
            font-style: <?php echo esc_attr($slider_title_font[3]);?>;
            text-transform: <?php echo esc_attr($slider_title_font[4]);?>;
            line-height: <?php echo esc_attr($slider_title_font[5]);?>;
            letter-spacing: <?php echo esc_attr($slider_title_font[6]);?>px;
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_title_color', '#ffffff'));?>;
        }
        .slider__title a:hover{
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_title_hover_color', '#ffffff')); ?>;
        }
        .slider__about__child{
            <?php 
             $slider_about_child = explode('|', get_theme_mod(
                 '_themename_slider_post_attributes_font_attributes', 'Montserrat|14|normal|normal|none|1|0')
                );
            ?>
            font-family: <?php echo esc_attr(str_replace('+', ' ', $slider_about_child[0])); ?>;
            font-size: <?php echo esc_attr($slider_about_child[1]); ?>px;
            font-weight: <?php echo esc_attr($slider_about_child[2]); ?>;
            font-style: <?php echo esc_attr($slider_about_child[3]);?>;
            text-transform: <?php echo esc_attr($slider_about_child[4]);?>;
            line-height: <?php echo esc_attr($slider_about_child[5]);?>;
            letter-spacing: <?php echo esc_attr($slider_about_child[6]);?>px;
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_post_attributes_color', '#ffffff'));?>;   
        }
        .slider__about__child a:hover{
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_post_attributes_hover_color', '#ffffff'));?>;   
        }
        .slider__link{
            <?php 
             $slider_read_more_btn = explode('|', get_theme_mod(
                 '_themename_slider_read_more_button_font_attributes', 'Montserrat|14|normal|normal|none|1|0')
                );
            ?>
            font-family: <?php echo esc_attr(str_replace('+', ' ', $slider_read_more_btn[0])); ?>;
            font-size: <?php echo esc_attr($slider_read_more_btn[1]); ?>px;
            font-weight: <?php echo esc_attr($slider_read_more_btn[2]); ?>;
            font-style: <?php echo esc_attr($slider_read_more_btn[3]);?>;
            text-transform: <?php echo esc_attr($slider_read_more_btn[4]);?>;
            line-height: <?php echo esc_attr($slider_read_more_btn[5]);?>;
            letter-spacing: <?php echo esc_attr($slider_read_more_btn[6]);?>px;
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_read_more_text_color', '#ffffff'));?>;    
        }
        .slider__link span:hover, .slider__link span:hover::after {
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_read_more_text_hover_color', '#ffffff'));?>;
        }
        .slider__author__name span, .slider__author__content span, .slider__author span{
            <?php 
             $slider_author = explode('|', get_theme_mod(
                 '_themename_slider_author_by_font_attributes', 'Montserrat|14|normal|normal|none|1|0')
                );
            ?>
            font-family: <?php echo esc_attr(str_replace('+', ' ', $slider_author[0])); ?>;
            font-size: <?php echo esc_attr($slider_author[1]); ?>px;
            font-weight: <?php echo esc_attr($slider_author[2]); ?>;
            font-style: <?php echo esc_attr($slider_author[3]);?>;
            text-transform: <?php echo esc_attr($slider_author[4]);?>;
            line-height: <?php echo esc_attr($slider_author[5]);?>;
            letter-spacing: <?php echo esc_attr($slider_author[6]);?>px;
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_author_by_color', '#ffffff'));?>;      
        }
        .slider__author__name .name, .slider__author__content .name, .slider__author .name{
            <?php 
             $slider_author = explode('|', get_theme_mod(
                 '_themename_slider_author_name_font_attributes', 'Montserrat|14|normal|normal|none|1|0')
                );
            ?>
            font-family: <?php echo esc_attr(str_replace('+', ' ', $slider_author[0])); ?>;
            font-size: <?php echo esc_attr($slider_author[1]); ?>px;
            font-weight: <?php echo esc_attr($slider_author[2]); ?>;
            font-style: <?php echo esc_attr($slider_author[3]);?>;
            text-transform: <?php echo esc_attr($slider_author[4]);?>;
            line-height: <?php echo esc_attr($slider_author[5]);?>;
            letter-spacing: <?php echo esc_attr($slider_author[6]);?>px;
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_author_name_color', '#ffffff'));?>;      
        }
        .slider__author__name a:hover , .slider__author__content a:hover, .slider__author a:hover{
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_author_name_hover_color', '#ffffff'));?>;      
        }
        .slider__prev, .slider__next{
            color: <?php echo esc_attr(get_theme_mod('_themename_slider_pagination_color', '#ffffff'));?>;
        }
        <?php $slider_option = get_theme_mod('_themename_slider_option', 'full-width'); ?>
        <?php if($slider_option == 'center'){ ?>
            .slider__image{
                width: 70vh;
                height: 70vh;
            }
            .slider__prev{
                left: 17%;
            }
            .slider__next{
                right: 17%;
            }
            @media only screen and (max-width: 600px){
                .slider__text {
                    width: 90% ;
                }
                .slider__about__child{
                    padding: 5px;
                }
                .slider__image{
                    width: 100vh !important;
                    margin: 0px;
                }
                .slider__prev{
                    left: 8%;
                }
                .slider__next{
                    right: 8%;
                }  
            }

        <?php } ?>

        </style>
</head>
<body>
<main>
<?php if(get_theme_mod('_themename_topbar_display_toggle', true)){ ?>
    <?php get_template_part('template-parts/topbar/wrapper'); ?>
<?php } ?>

<?php if(get_theme_mod('_themename_header_display_toggle', true)){ ?>
    <?php get_template_part('template-parts/header/wrapper'); ?>
<?php } ?>

<?php get_template_part('template-parts/navbar/layout-1'); ?>

</main>
