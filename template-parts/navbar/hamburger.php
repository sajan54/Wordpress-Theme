<section class="menu-hamburger menu-hamburger--collapsed" id="menu-hamburger">
    <div class="menu-hamburger__header" >
        <div class="logo__custom logo__custom--navbar" >
            neat blog
        </div>
        <div class="close" id="menu-hamburger-close"></div>
    </div>
    <div class="menu-hamburger__content" >
        <nav class="navigation">
            <?php wp_nav_menu(array('theme_location'=>'main-menu')); ?>
            </nav>

<div class="menu-hamburger__social u-margin-top-lg">
    <div class="u-space-between">
        <section class=" social">
            <a class="social__icons social__icons--nav" href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="social__icons social__icons--nav" href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="social__icons social__icons--nav" href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
        </section>

        <section class="search-icon" id="search">
            <i class="fas fa-search"></i>
        </section>
    </div>
</div>

</div>
</section>

<div id="backdrop"></div>

    