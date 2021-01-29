<section class="widget widget__themename_subscribe_widget home">
    <section class="newsletter" style="background-color: <?php echo get_theme_mod('_themename_newsletter_backgroundcolor'); ?>;">
        <div class="newsletter__left">
            <div class="newsletter__text">
                <div class="newsletter__heading">
                    <h2 style="color: <?php echo get_theme_mod('_themename_newsletter_head_font_color'); ?>;"><?php echo get_theme_mod('_themename_newsletter_head_text','Subscribe to my Newsletter') ?></h2>
                </div>
                <div class="newsletter__subheading">
                    <p style="color: <?php echo get_theme_mod('_themename_newsletter_subhead_font_color'); ?>;"><?php echo get_theme_mod('_themename_newsletter_subhead_text','Join 7000+ people to get notifications about new recipes.') ?></p>
                </div>
            </div>
            <div class="newsletter__action">
                <div class="newsletter__input">
                    <input type="text" name="newsletter" placeholder="Email address" />
                </div>
                <div class="newsletter__button" style="background-color: <?php echo get_theme_mod('_themename_newsletter_button_color'); ?>;">
                <?php echo get_theme_mod('_themename_newsletter_button_text','SUBSCRIBE') ?>
                </div>
            </div>
        </div>
    </section>
</section>
