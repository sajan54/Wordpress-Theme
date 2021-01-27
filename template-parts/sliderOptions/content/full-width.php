<div class="u-outline-none">
<div class="slider__content">
    <div class="slider__text slider__text--dark">
        <div class="slider__category">
            <?php 
                if(get_theme_mod('_themename_slider_category_display', true) && !empty($categories)){
                    foreach($categories as $cat){
                        echo '<div><a href="'.esc_url(get_term_link($cat->term_id)).'">'.$cat->name.'</a></div>';
                    }
                }
            ?>
        </div>

        <?php if(get_theme_mod('_themename_slider_title_display', true)){?>
            <div class="slider__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
        <?php } ?>

        <div class="slider__about">

            <?php if(get_theme_mod('_themename_slider_date_display', true) && $date){ ?>
                <div class="slider__about__child">
                    <a href="<?php echo get_year_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));?>">
                        <i class="fas fa-calendar-week"></i>
                    <?php echo $date; ?></a>
                </div>
            <?php } ?>
            
            <?php $min_read = get_post_meta(get_the_ID(), '_themename_min_read', TRUE ); ?>
            <?php if(get_theme_mod('_themename_slider_min_read_display', true) && $min_read){ ?>
                <div class="slider__about__child">
                    <a href="<?php the_permalink(); ?>">
                        <i class="fas fa-clock"></i>
                        <?php echo $min_read; ?>
                    </a>
                </div>
            <?php } ?>
            <?php if(get_theme_mod('_themename_slider_comments_display', true)){ ?>
                <div class="slider__about__child">
                    <a href="<?php the_permalink(); ?>/#respond">
                        <i class="fas fa-comment-dots"></i>
                        <?php echo get_comments_number($current_post_id); ?> comments
                    </a>
                </div>
            <?php } ?>
        </div>
        <?php if(get_theme_mod('_themename_slider_read_more_button_display', true)){ ?>
            <a href="<?php the_permalink(); ?>" class="slider__link slider__link--dark u-margin-top ">
            <span><?php echo esc_html(get_theme_mod('_themename_slider_read_more_button_text', 'Read More'));?></span>
            </a>
        <?php } ?>

    </div>
    <?php 
        $slider_overlay_color = get_theme_mod('_themename_slider_overlay_color', 'rgba(0,0,0,0.6)');
    ?>
    <div class="slider__image slider__image--full"
    style="height: 75vh; width: 100vw; 
    background-image:linear-gradient(<?php echo esc_attr($slider_overlay_color);?>, <?php echo esc_attr($slider_overlay_color);?>),url(<?php echo $thumbnail; ?>)"
    >
    </div>

</div>
</div>