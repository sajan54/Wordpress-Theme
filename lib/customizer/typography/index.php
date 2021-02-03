<?php

$wp_customize->add_section('_themename_typo_topbar_section', array(
    'title' => esc_html__('TopBar', '_themename'),
    'panel' => '_themename_typography_panel',
));

$wp_customize->add_section('_themename_typography_slider_banner_section', array(
    'title' => esc_html__('Slider & Banner', '_themename'),
    'panel' => '_themename_typography_panel',
));

include 'topbar.php';
include 'slider.php';