<?php
/**
* Image Radio Button Customizer Control
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
 * This class is for the image radio button control in the Customizer.
 *
 * @access public
 */



class ImageRadioButton_Control extends WP_Customize_Control{
    public $type = 'image_radio_button';
    public $extra = '';
    public function render(){
        if(empty($this->choices)) return;
        $name = 'image_radio_button-'.$this->id;
    ?>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <span class="customize-control-description">
            <?php echo wp_kses_post($this->description); ?>
        </span>
        <ul class="controls image_radio_button-container" style="margin: 10px 0px;">
            <?php 
                foreach($this->choices as $value => $label){
                    $class = ($this->value() == $value) ? 'image_radio_button-img-selected image_radio_button-img-img' : 'image_radio_button-img-img';
            ?>
                <li style="display: inline; margin-right: 10px;">
                    <label>
                        <input 
                            <?php $this->link(); ?> style="display:none" type="radio"
                            value="<?php echo esc_attr($value); ?>" 
                            name="<?php echo esc_attr($name); ?>"
                            <?php checked($this->value(), $value); ?>
                         />
                         <img style="height: 115px; widht: 115px;" src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
                    </label>
                </li>
            <?php } ?>
        </ul>
    <?php
    }
}