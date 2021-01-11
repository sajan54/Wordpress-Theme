<?php
/**
* Info Text Customizer Control
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
 * This class is for the info text control in the Customizer.
 *
 * @access public
 */

class InfoText extends WP_Customize_Control{
    public $type = 'info_text';
    public function enqueue(){
        //TODO: seperate assets for each custom control
    }
    public function render_content(){
    ?>
        <div style="background-color: #fff; padding: 5px;">
            <span class="customize-control-title">
                <h3><?php echo esc_html($this->label); ?></h3>
            </span>
            <p style="font-size: 14px; font-weight: 600;"><?php echo $this->description; ?></p>
        </div>
    <?php
    }
}