<section class="slider__wrapper">
<?php
    if(get_theme_mod('_themename_slider_or_banner_display_toggle', true)){
        $template_part = get_theme_mod('_themename_slider_option', 'full-width');
        if(in_array($template_part, array('grid2', 'grid3', 'grid4'))) $template_part = 'grid';
        get_template_part('template-parts/sliderOptions/slider', $template_part);
    }
else{
    if(get_theme_mod('_themename_slider_or_banner_display_toggle', true)){
        $template_part = 'full-width';
        get_template_part('template-parts/sliderOptions/slider', $template_part);
    }   
}
?>
</section>
