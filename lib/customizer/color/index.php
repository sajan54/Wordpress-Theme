<?php

$wp_customize->add_section('_themename_color_topbar_section', array(
    'title' => esc_html__('TopBar', '_themename'),
    'panel' => '_themename_color_panel',
));

include 'topbar.php';