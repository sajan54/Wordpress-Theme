<?php
/**
* Text Radio Button Customizer Control
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
 * This class is for the text radio button control in the Customizer.
 *
 * @access public
 */

class TextRadioButton extends WP_Customize_Control{

    public $type = 'text_radio_button';

    public function enqueue(){
        //TODO: seperate assets for each custom control
    }

    public function render_content(){
        if(empty($this->choices)) return;
        $name = '_themename_text_radio_button'. $this->id;
    ?>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <span class="customize-control-description"><?php echo wp_kses_post($this->description); ?></span>
        <ul class="controls _themename_text_radio_button_container">
            <?php 
                foreach($this->choices as $value=>$label){
                $class = ($this->value() == $value) ? 
                    '_themename_text_radio_button_selected _themename_text_radio_button_span' : 
                    '_themename_text_radio_button_span';
            ?>
                <li style="display: inline;">
                    <label>
                        <input 
                            <?php $this->link(); ?>
                            style = 'display:none;'
                            type="radio" 
                            value="<?php echo esc_attr($value); ?>" 
                            name="<?php echo esc_attr($name); ?>" 
                            <?php $this->link(); checked($this->value(), $value);?>
                        />
                        <span
                            class='<?php echo esc_attr($class); ?>' >
                            <?php echo esc_html($label); ?>
                        </span>
                    </label>
                </li>
            <?php
                }
            ?>
        </ul>
    <?php
    }

}
