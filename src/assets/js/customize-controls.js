import $ from 'jquery';

(function( api ) {
    api.bind( 'ready', function() {

        var params = { 
            change: function(e, ui) {
            $( e.target ).val( ui.color.toString() );
            $( e.target ).trigger('change'); // enable widget "Save" button
            },
        };
        $('._themename_alpha_colorpicker').not('[id*="__i__"]').wpColorPicker( params );
        
        $('.customizer_internal_links').on('click', function(e){
            e.preventDefault();
            let type = $(this).data("link_type");
            let link = $(this).data("link");
            if(type === 'control'){
                wp.customize.control( link ).focus();
            }else if(type === 'section'){
                wp.customize.section(link).expand();
            }
            
        });
        $(document).ready(function () {
            $('.image_radio_button-container li img').click(function () {
                $('.image_radio_button-container li').each(function () {
                    $(this).find('img').removeClass('image_radio_button-img-selected');
                });
                $(this).addClass('image_radio_button-img-selected');
            });
            $('input[data-input-type]').on('input change', function () {
                var val = $(this).val();
                $(this).prev('.cs-range-value').html(val);
                $(this).val(val);
            });
            $('a.cs-range-default').on('click', function(e){
                e.preventDefault();
                let input_range_field = $('input#'+$(this).attr('data-rangeInput'));
                let default_value = input_range_field.attr('default');
                input_range_field.prev('.cs-range-value').html(default_value);
                wp.customize($(this).attr('data-rangeInput'),function(obj){
                    obj.set(default_value);
                });
            });
        });
        const googleFontsControls = ['_themename_topbar_font_attributes'];
        googleFontsControls.forEach((control)=>{
            let currentFontControl = $('#'+control);
            if(!currentFontControl.length) return;
            let currentFontAttributes = currentFontControl.val().split("|");
            let fontAttributes = ['Montserrat', '14', 'normal', 'normal', 'none', 0, 0];
            if(currentFontAttributes.length == 7){
                fontAttributes = [];
                currentFontAttributes.forEach((item)=>{
                    fontAttributes.push(item);
                });
            }
            const attributes = [
                '_font_family', '_font_size', '_font_weight', '_font_style',
                '_text_transform', '_line_height', '_letter_spacing'
            ]
            function setFontAttributes(){
                let attribute_value = '';
                attributes.forEach(($item)=>{
                    attribute_value += $('#'+control+$item).val()+'|';
                });
                $('#'+control).val(null)
                $('#'+control).val(attribute_value.slice(0, -1)).change();
            }
            attributes.forEach(($item)=>{
                let $event = 'change';
                if($item === '_font_size' || $item === '_line_height' || $item === '_letter_spacing'){
                    $event = 'input';
                }
                $('#'+control+$item).on($event, function(){setFontAttributes();});
            });
        });
    });
}) ( wp.customize );