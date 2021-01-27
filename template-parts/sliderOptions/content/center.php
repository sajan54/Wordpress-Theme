<?php if (rb_fs()->is_plan__premium_only('pro') ){ ?>
<div class="u-outline-none">
    <div class="slider__content">
        <div class="slider__text <?php
            if(get_theme_mod('_themename_slider_overlay_option', 'content') === 'image'
                 && get_theme_mod('_themename_slider_overlay_display', true)){
                     echo 'slider__text--full';
                 }
        ?>">
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
                <div class="slider__title fadeInUp">
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
                <div class="slider__link u-margin-top-sm">
                    <span>
                    <a href="<?php the_permalink(); ?>">
                        <?php echo esc_html(get_theme_mod('_themename_slider_read_more_button_text', 'Read More')); ?>
                    </a>
                    </span>
                </div>
            <?php } ?>
            <?php if(get_theme_mod('_themename_slider_author_display', true)){ ?>
                <div class="slider__author slider__author--image">
                    <?php if(get_theme_mod('_themename_slider_author_image_display', true)){ ?>
                        <figure class="slider__author__image">
                            <?php echo get_avatar(get_the_author_meta('ID')); ?>
                        </figure>
                    <?php } ?>
                    <div class="slider__author__name">
                        <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" 
                            class="name"><?php the_author(); ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php 
            $slider_overlay_color = get_theme_mod('_themename_slider_overlay_color', 'rgba(0,0,0,0.6)');
        ?>
        <div class="slider__image"
        style="height: 75vh; 
        width: 90vw; 
        background-image:linear-gradient(<?php echo esc_attr($slider_overlay_color);?>, <?php echo esc_attr($slider_overlay_color);?>),url(<?php echo $thumbnail; ?>)"
        >
        </div>
    </div>
</div>
<?php } ?>