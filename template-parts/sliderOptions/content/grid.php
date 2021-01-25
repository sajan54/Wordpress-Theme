<div class="u-outline-none">
    <div class="slider__content slider__content--base">
        <div class="slider__text slider__text--base slider__text--dark slider__text--full">
            <div class="slider__category slider__category--base">
                <?php 
                    if(get_theme_mod('_themename_slider_category_display', true) && !empty($categories)){
                        foreach($categories as $cat){
                            echo '<div><a href="'.esc_url(get_term_link($cat->term_id)).'">'.$cat->name.'</a></div>';
                        }
                    }
                ?>
            </div>

            <?php if(get_theme_mod('_themename_slider_title_display', true)){?>
                <div class="slider__title slider__title--base">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
            <?php } ?>

            <div class="slider__about">

                <?php if(get_theme_mod('_themename_slider_date_display', true) && $date){ ?>
                    <div class="slider__about__child slider__about__child--base">
                        <a href="<?php echo get_year_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));?>">
                            <i class="fas fa-calendar-week"></i>
                        <?php echo $date; ?></a>
                    </div>
                <?php } ?>
                <?php $min_read = get_post_meta(get_the_ID(), '_themename_min_read', TRUE ); ?>
                <?php if(get_theme_mod('_themename_slider_min_read_display', true) && $min_read){ ?>
                    <div class="slider__about__child slider__about__child--base">
                        <a href="<?php the_permalink(); ?>">
                            <i class="fas fa-clock"></i>
                            <?php echo $min_read; ?>
                        </a>
                    </div>
                <?php } ?>
                <?php if(get_theme_mod('_themename_slider_comments_display', true)){ ?>
                    <div class="slider__about__child slider__about__child--base">
                    <a href="<?php the_permalink(); ?>/#respond">
                        <i class="fas fa-comment-dots"></i>
                        <?php echo get_comments_number($current_post_id); ?> comments
                    </a>
                    </div>
                <?php } ?>
            </div>
            <?php if(get_theme_mod('_themename_slider_read_more_button_display', true)){ ?>
                <a href="<?php the_permalink(); ?>" class="slider__link slider__link--base slider__link--dark">
                <span><?php echo esc_html(get_theme_mod('_themename_slider_read_more_button_text', 'Read More'));?></span>
                </a>
            <?php } ?>
        </div>
        <div class="slider__image slider__image--base">
            <img src="<?php echo $thumbnail; ?>" alt="<?php the_title(); ?>">
        </div>
    </div>
</div>
