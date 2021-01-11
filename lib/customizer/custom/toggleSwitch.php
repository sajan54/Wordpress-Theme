<?php
/**
* Toggle Switch Customizer Control
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
 * This class is for the toggle control in the Customizer.
 *
 * @access public
 */

class ToggleSwitch extends WP_Customize_Control{

    public $type = 'toggle_switch';

    public function enqueue(){
        //TODO: seperate assets for each custom control
    }

    public function render_content(){
    ?>
		<div class="toggle_switch">
			<span class="customize-control-description">
				<?php echo wp_kses_post($this->description); ?>
			</span>
			<div class="onoffswitch">
			    <input type="checkbox" id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" class="onoffswitch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
			    <label class="onoffswitch-label" for="<?php echo esc_attr($this->id); ?>"></label>
			</div>
			<span class="customize-control-title onoffswitch_label"><?php echo esc_html( $this->label ); ?></span>
		</div>
    <?php
    }

}

