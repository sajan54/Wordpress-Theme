</main>
<?php if(get_theme_mod('_themename_footer_display_toggle', 'show') === 'show'){ ?>
    <?php get_template_part('template-parts/footer/wrapper'); ?>
<?php } ?>
<?php wp_footer(); ?>
</main>
<script>
    <?php 
if(get_theme_mod('_themename_slider_or_banner_display_toggle', true) 
    && wp_script_is( '_themename-scripts', 'done' )){
    $slider_speed = get_theme_mod('_themename_slider_speed', 5) * 1000;
?>
    jQuery(document).on('ready', function() {
        <?php $slider_option = get_theme_mod('_themename_slider_option', 'full-width'); ?>
        <?php if($slider_option === 'hero'){ ?>
            jQuery('.slider--hero').not('.slick-initialized').slick({
                dots: true,
                speed: 800,
                autoplaySpeed: <?php echo esc_attr($slider_speed); ?>,
                autoplay: <?php echo get_theme_mod('_themename_slider_autoplay', false) ?  'true' :  'false'; ?>,
                slidesToShow: 1,
                useTransform: false,
                fade: true,
                zIndex: 99,
                customPaging: () => {
                    return '<div class="custom-dots"></div>'
                }
            });
        <?php }else if($slider_option === 'center'){ ?>
            jQuery('.slider--center').slick({
                infinite: true,
                speed: 800,
                autoplaySpeed: <?php echo esc_attr($slider_speed); ?>,
                autoplay: <?php echo get_theme_mod('_themename_slider_autoplay', false) ?  'true' :  'false'; ?>,
                slidesToShow: 1,
                centerMode: true,
                useTransform: false,
                prevArrow: jQuery('.slider__prev'),
                nextArrow: jQuery('.slider__next'),
                responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        centerMode: false,
                    }
                }, ]

            });
        <?php }else if($slider_option === 'full-width'){ ?>
            jQuery('.slider--center').slick({
                infinite: true,
                speed: 800,
                autoplaySpeed: <?php echo esc_attr($slider_speed); ?>,
                autoplay: <?php echo get_theme_mod('_themename_slider_autoplay', false) ?  'true' :  'false'; ?>,
                slidesToShow: 1,
                useTransform: false,
                prevArrow: jQuery('.slider__prev'),
                nextArrow: jQuery('.slider__next'),
            });
        <?php }else if($slider_option === 'image-pagination'){ ?>
            jQuery('.slider--pagination').slick({
                dots: true,
                speed: 800,
                autoplaySpeed: <?php echo esc_attr($slider_speed); ?>,
                slidesToShow: 1,
                useTransform: false,
                autoplay: <?php echo get_theme_mod('_themename_slider_autoplay', false) ?  'true' :  'false'; ?>,
                fade: true,
                zIndex: 99,
                customPaging: (slick, index) => {
                    return '<div class="image-pagination" style="background-image:url(' + jQuery(slick.$slides[
                        index]).data('thumb') + ')"></div>'
                }
            });
        <?php }else{ ?>
            jQuery('.slider--center').slick({
                infinite: true,
                speed: 800,
                autoplaySpeed: <?php echo esc_attr($slider_speed); ?>,
                autoplay: <?php echo get_theme_mod('_themename_slider_autoplay', false) ?  'true' :  'false'; ?>,
                slidesToShow: <?php if($slider_option === 'grid2'){echo '2';}elseif($slider_option === 'grid3'){echo '3';}else{echo '4';} ?>,
                useTransform: false,
                slidesToScroll: 1,
                prevArrow: jQuery('.slider__prev'),
                nextArrow: jQuery('.slider__next'),
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                ]
            });
        <?php } ?>
    });
<?php
}
?>
window.onscroll = () => {
    onScroll();
};

const onScroll = () => {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        jQuery("#navbar").addClass("navbar--fixed");
        jQuery("#navigation").addClass("navigation--fixed");
        jQuery("#logo__image").addClass("logo__image--fixed");
        jQuery("#navbar__social").addClass("navbar__social--fixed");
        jQuery("#navbar__search").addClass("navbar__search--fixed");

    } else {
        jQuery("#navbar").removeClass("navbar--fixed");
        jQuery("#navigation").removeClass("navigation--fixed");
        jQuery("#logo__image").removeClass("logo__image--fixed");
        jQuery("#navbar__social").removeClass("navbar__social--fixed");
        jQuery("#navbar__search").removeClass("navbar__search--fixed");
    }
};
</script>
</body>
</html>