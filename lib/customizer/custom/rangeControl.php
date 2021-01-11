<?php
/**
* Range Control Customizer Control
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
 * This class is for the range Control control in the Customizer.
 *
 * @access public
 */

class RangeControl extends WP_Customize_Control{
    public $type = 'range_control';
    public function enqueue(){
        //TODO: seperate assets for each custom control
    }
    public function render_content(){
    ?>
        <div>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <span class="customize-control-description"><?php echo esc_html($this->description); ?></span>
            <a href="#" data-rangeInput="<?php echo esc_attr($this->id); ?>" class="cs-range-default">
                <img widht="15" height="15" src="<?php echo get_template_directory_uri().'/dist/assets/images/undo.png' ?>" alt="Undo">
            </a>
            <div class="cs-range-value">
                <?php echo esc_attr($this->value()); ?>
            </div>
            <input 
                id="<?php echo esc_attr($this->id); ?>"
                data-input-type="range" type="range" 
                <?php $this->input_attrs(); ?> 
                value="<?php echo esc_attr($this->value()); ?>" 
                <?php $this->link(); ?> 
            />
        </div>
    <?php
    }
}