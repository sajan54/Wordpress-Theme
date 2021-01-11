<?php if(have_posts()){ ?>

<?php while(have_posts()){ ?>
    <?php the_post(); ?>
    <h2>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </h2>
    <div>
        <?php _themename_post_meta(); ?>
    </div>
    <div>
        <?php the_excerpt(); ?>
    </div>
    <?php _themename_read_more_link(); ?>
<?php } ?>
<?php the_posts_pagination(); ?>
<?php }else{ ?>

<p><?php echo __('There are no posts yet!', '_themename'); ?></p>

<?php }?>