<?php
/**
* Alpha Color Picker Customizer Control
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Exit if WP_Customize_Control does not exsist.
if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

/**
 * This class is for the alpha color picker control in the Customizer.
 *
 * @access public
 */

class AlphaColorPicker_Control extends WP_Customize_Control{
    public $type = 'alpha_color';
    public function enqueue(){
        wp_register_script('wp-color-picker-alpha', get_template_directory_uri().'/dist/assets/js/colorpicker.min.js', array('wp-color-picker'));
    }

    public function render_content(){
    ?>
        <div>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <span class="customize-control-description"><?php echo esc_html($this->description); ?></span>
            <input type="text" 
            class="_themename_alpha_colorpicker" 
            data-alpha="true" 
            <?php $this->link(); ?>  
            />
        </div>
    <?php
    }
}