<section class="top-bar" style="background-color: <?php echo esc_attr(get_theme_mod('_themename_topbar_bg_color', '#F5F5F5')) ?>;">
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
            <p style="font-size: 10px; font-weight: bold;">
                <a> Add menu </a> to TopBar Navigation Menu Location.
            </p>
        <?php } ?> 
    </div>
    <div class="top-bar__social social">
        <a class="social__icons social__icons--top-bar" href="#">
            <i class="fab fa-instagram"></i>
        </a>
        <a class="social__icons social__icons--top-bar" href="#">
            <i class="fab fa-twitter"></i>
        </a>
        <a class="social__icons social__icons--top-bar" href="#">
            <i class="fab fa-facebook-f"></i>
        </a>
    </div>
</section>