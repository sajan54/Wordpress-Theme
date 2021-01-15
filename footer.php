</main>
<?php if(get_theme_mod('_themename_footer_display_toggle', 'show') === 'show'){ ?>
    <?php get_template_part('template-parts/footer/wrapper'); ?>
<?php } ?>
<?php wp_footer(); ?>

<script type="text/javascript">
window.onscroll = () => {
    onScroll();
};

const onScroll = () => {
    if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
    ) {
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