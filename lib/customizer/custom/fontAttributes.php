<?php
/**
* Google Font Customizer Control
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

class FontAttributes extends WP_Customize_Control{
    public $type = 'font_attributes';
    public function enqueue(){
        //TODO: seperate assets for each custom control
    }
    public function render_content(){
        $font_attribute_values = explode('|', get_theme_mod($this->id));
        if(count($font_attribute_values) !== 7){
            $font_attribute_values = ['Montserrat', 14, 'normal', 'normal', 'none', 0, 0];
        }
    ?>
		<div class="font_attributes_container">
            <label>
            <input type="hidden" 
                id="<?php echo esc_attr($this->id); ?>"
                name="<?php echo esc_attr($this->id); ?>"
                value="<?php echo esc_attr($this->value()); ?>"
                <?php $this->link(); ?>
            />
            </label>
            <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
			<span class="customize-control-description">
				<?php echo wp_kses_post($this->description); ?>
			</span>            
            <hr/>
            <div>
                <label class="customize-control-title">Font Family</label>
                <select id="<?php echo esc_attr($this->id).'_font_family'; ?>">
                    <?php foreach($this->choices[0] as $key=>$value){?>
                        <option 
                        <?php 
                            selected($font_attribute_values[0], $key);
                        ?>
                        value="<?php echo esc_attr($key); ?>"><?php echo esc_attr($value); ?></option>
                    <?php }?>
                </select>
            </div>
            <div>
                <label class="customize-control-title">Font Size</label>
                <input type="text" 
                value="<?php echo esc_attr($font_attribute_values[1]); ?>" 
                id="<?php echo esc_attr($this->id).'_font_size'; ?>" />
            </div>
            <div>
                <label class="customize-control-title">Font Weight</label>
                <select id="<?php echo esc_attr($this->id).'_font_weight'; ?>">
                    <?php foreach($this->choices[1] as $key=>$value){?>
                        <option 
                        <?php 
                            selected($font_attribute_values[2], $key);
                        ?>
                        value="<?php echo esc_attr($key); ?>"><?php echo esc_attr($value); ?></option>
                    <?php }?>
                </select>
            </div>
            <div>
                <label class="customize-control-title">Font Style</label>
                <select id="<?php echo esc_attr($this->id).'_font_style'; ?>">
                    <?php foreach($this->choices[2] as $key=>$value){?>
                        <option 
                        <?php 
                            selected($font_attribute_values[3], $key);
                        ?>
                        value="<?php echo esc_attr($key); ?>"><?php echo esc_attr($value); ?></option>
                    <?php }?>
                </select>
            </div>
            <div>
                <label class="customize-control-title">Text Transform</label>
                <select id="<?php echo esc_attr($this->id).'_text_transform'; ?>">
                    <?php foreach($this->choices[3] as $key=>$value){?>
                        <option 
                        <?php 
                            selected($font_attribute_values[4], $key);
                        ?>
                        value="<?php echo esc_attr($key); ?>"><?php echo esc_attr($value); ?></option>
                    <?php }?>
                </select>
            </div>
            <div>
                <label class="customize-control-title">Line Height</label>
                <input type="text" 
                value="<?php echo esc_attr($font_attribute_values[5]); ?>"
                id="<?php echo esc_attr($this->id).'_line_height'; ?>" />
            </div>
            <div>
                <label class="customize-control-title">Letter Spacing</label>
                <input type="text" 
                value="<?php echo esc_attr($font_attribute_values[6]); ?>"
                id="<?php echo esc_attr($this->id).'_letter_spacing'; ?>" />
            </div>
		</div>
    <?php
    }
}