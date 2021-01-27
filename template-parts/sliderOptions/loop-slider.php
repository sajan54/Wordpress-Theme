<?php
$slider_options = get_theme_mod('_themename_slider_option', 'full-width');
if(in_array($slider_options, array('grid2', 'grid3', 'grid4'))) $slider_options = 'grid';
else{
    $slider_options = 'full-width';
}

$category_posts = new WP_Query(array(
    'posts_per_page' => get_theme_mod('_themename_slider_banner_no_of_posts', 5), 
    'order' => get_theme_mod('_themename_slider_banner_post_order', 'DESC'),
    'ignore_sticky_posts' => 1
));
if($category_posts->have_posts()){
    while($category_posts->have_posts()){
        $category_posts->the_post();
        $current_post_id = get_the_ID();
        $thumbnail = get_the_post_thumbnail_url($current_post_id);
        $date = get_the_date(get_option('date_format'), $current_post_id);
        if(!$thumbnail){
            $thumbnail = esc_url(get_theme_mod('_themename_slider_banner_fallback_image'));
        }
        $categories = get_the_category($current_post_id);
        include 'content/'.$slider_options.'.php';
    }
}
wp_reset_query();
?>
