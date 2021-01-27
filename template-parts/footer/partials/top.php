<footer class="footer" style="background-color:<?php echo get_theme_mod('_themename_footer_top_backgroundcolor'); ?>;">
<div class="footer__content">
<div class="footer__top">
    <section class="footer__grid footer__grid--4">
        <?php 
        if(is_active_sidebar('footer-widget')){
            dynamic_sidebar('footer-widget');} ?>
    </section>
</div>

    