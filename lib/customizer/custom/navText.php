<?php
/**
* Nav Text Customizer Control
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
 * This class is for the nav text control in the Customizer.
 *
 * @access public
 */

class NavText_Control extends WP_Customize_Control{
    public $type = 'nav_text';
    public function enqueue(){
        //TODO: seperate assets for each custom control
    }
    public function render_content(){
    ?>
        <div style="display: flex;">
            <span style="margin-right: 5px;"><b><?php echo esc_html($this->label); ?></b></span>
            <?php echo $this->description; ?>
        </div>
    <?php
    }
}