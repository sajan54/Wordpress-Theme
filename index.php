<?php get_header(); ?>
<?php get_template_part('template-parts/slider'); ?>
<section class="sidebar-container">
<?php if($sidebar){ ?>
            <section class="sidebar-wrap">
                <?php dynamic_sidebar('sidebar'); ?>
            </section>
        <?php } ?>
<?php get_footer(); ?>