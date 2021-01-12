<section class="navbar navbar--faith" id="navbar" style= "border-bottom: <?php echo get_theme_mod('_themename_header_border_radius', 5); ?>px 
                         <?php echo get_theme_mod('_themename_header_border_style'); ?> 
                         <?php echo get_theme_mod('_themename_header_border_color'); ?>;">
  
    <div class="navbar__child" style="height:70px;" >

    <div class="navbar__left">
            <section class="navbar__toggle" id="menu-toggle">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </section>

          
            <section class="logo logo--navbar" style="color:#000">
                <div class="logo__image logo__image--navbar" id="logo__image">
                    <img src="resources/images/gucherry-logo.png" height="45" alt="">
                </div>
            </section>
        </div>
  
        <nav class="navigation" id="navigation"
         style="font-size:13px; text-transform:uppercase; font-weight:400; color:#000">
            <?php wp_nav_menu(array('theme_location'=>'main-menu')); ?>
        </nav>

      
        <section class="logo logo--navbar center" style="color:#000">
            <div class="logo__image logo__image--navbar" id="logo__image">
                <img src="resources/images/logo.png" height="45" alt="">
            </div>
        </section>


<section class="canvas">
    <div class="canvas__content">
        <div class="canvas__title">
            <div class="canvas__close" id="canvas-close">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="canvas__body" >
        <nav class="navigation" id="navigation"
            style="font-size:13px; text-transform:uppercase; font-weight:400; color:#000">
            <?php include "menu.php" ?>
        </nav>
        </div>
    </div>
</section>


<div class="search">
    <div class="u-table-align">
        <div class="close close--popup" id="search-close"></div>
        <div class="u-table-align-cell">
            <div class="input-wrapper">
                <input type="text" id="search-input" value="" placeholder="type to search" />
                <div class="btn btn--search">search</div>
            </div>
        </div>
    </div>
</div>
