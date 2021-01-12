<section class="top-bar" style="background-color: <?php echo esc_attr(get_theme_mod('_themename_topbar_bg_color', '#FFECEC')) ?>;
    border-bottom: <?php echo get_theme_mod('_themename_topbar_border_radius', 5); ?>px 
                         <?php echo get_theme_mod('_themename_topbar_border_style'); ?> 
                         <?php echo get_theme_mod('_themename_topbar_border_color'); ?>;">
    <div class="top-bar__text">
        <?php 
            if (has_nav_menu('topbar-menu')){
                wp_nav_menu(array(
                    'theme_location'=>'topbar-menu',
                    'depth' => '1',
                    'menu_class'=>'top-menu'
                ));
            }else if(current_user_can('editor') || current_user_can('administrator')){
        ?>
          
        <?php } ?> 
    </div>
    <div class="top-bar__social social">
        <a style="color:<?php echo get_theme_mod('_themename_topbar_social_icon_color', '#333333'); ?>;" class="social__icons social__icons--top-bar" href="<?php echo esc_html(get_theme_mod('_themename_topbar_instagram_link'));?>">
            <i class="fab fa-instagram"></i>
        </a>
        <a style="color:<?php echo get_theme_mod('_themename_topbar_social_icon_color', '#333333'); ?>;" class="social__icons social__icons--top-bar" href="<?php echo esc_html(get_theme_mod('_themename_topbar_twitter_link'));?>">
            <i class="fab fa-twitter"></i>
        </a>
        <a style="color:<?php echo get_theme_mod('_themename_topbar_social_icon_color', '#333333'); ?>;" class="social__icons social__icons--top-bar" href="<?php echo esc_html(get_theme_mod('_themename_topbar_facebook_link'));?>">
            <i class="fab fa-facebook-f"></i>
        </a>
    </div>

</section>