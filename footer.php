<?php if(get_theme_mod('_themename_footer_display_toggle', 'show') === 'show'){ ?>
    <?php get_template_part('template-parts/footer/wrapper'); ?>
<?php } ?>
<?php wp_footer(); ?>

<script type="text/javascript">
jQuery("#canvas").click((e) => {
    jQuery(".canvas").addClass("canvas--open");
    jQuery("#backdrop").addClass("backdrop");
});

jQuery("#canvas-close").click(() => {
    jQuery(".canvas").removeClass("canvas--open");
    jQuery("#backdrop").removeClass("backdrop");
});

jQuery("#search").click(() => {
    jQuery(".search").addClass("search--display");
    jQuery("#search-close").addClass("search-close--display");
    jQuery("html").css({
        "overflow-y": "scroll",
        position: "fixed",
        width: "100%",
        left: "0px",
        top: "0px",
    });
});

jQuery("#search-close").click(() => {
    jQuery(".search").removeClass("search--display");
    jQuery("#search-close").removeClass("search-close--display");
    jQuery("html").removeAttr("style");
});

jQuery("#menu-toggle").click((e) => {
    jQuery("#menu-hamburger").addClass("menu-hamburger--open");
});

jQuery("#menu-hamburger-close").click((e) => {
    jQuery("#menu-hamburger").removeClass("menu-hamburger--open");
});

jQuery(".submenu-toggle").click((e) => {
    var id = e.target.id;
    if (jQuery("#" + id).hasClass("open-menu")) {
        jQuery("#" + id).removeClass("open-menu");
    } else {
        jQuery("#" + id).addClass("open-menu");
    }
});
</script>

<!-- onscroll ma sticky navbar ko lagi js -->
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