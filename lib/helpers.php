<?php

function _themename_sanitize_display_toggle($input){
    $input = is_bool($input) ? $input : true;
    return $input;
}

function _themename_sanitize_choices($input, $choices, $default){
    $input = array_key_exists($input, $choices) ? $input : $default;
    return $input;
}

function _themename_sanitize_decimal($input, $default){
    if(!is_numeric($input)) return $default;
    $input = ($pos = strpos($input, "." )) ? substr($input, 0, $pos+3) : $input;
    return $input;
}

function _themename_sanitize_integer($input, $default){
    if(!intval($input)) return $default;
    return $input;
}

function _themename_sanitize_integer_within_range($input, $default, $high, $low){
    if(!intval($input)) return $default;
    if($input > $high || $input < $low) return $default;
    return $input;
}

function _themename_sanitize_font_attributes($input, $choices, $default){
    $input = explode('|', $input);
    if(count($input) !== 7) return $default;
    $default = explode('|', $default);  
    $template = '$font_name|$font_size|$font_weight|$font_style|$text_transform|$line_height|$letter_spacing';
    $values = array(
        '$font_name' => _themename_sanitize_choices($input[0], $choices[0], $default[0]),
        '$font_size' => _themename_sanitize_decimal($input[1], $default[1]),
        '$font_weight' => _themename_sanitize_choices($input[2], $choices[1], $default[2]),
        '$font_style' => _themename_sanitize_choices($input[3], $choices[2], $default[3]),
        '$text_transform' => _themename_sanitize_choices($input[4], $choices[3], $default[4]),
        '$line_height' => _themename_sanitize_decimal($input[5], $default[5]),
        '$letter_spacing' => _themename_sanitize_decimal($input[6], $default[6])
    );
    return strtr($template, $values);
}

function _themename_sanitize_rgba_color($input, $default){
    $pattern = "/^(\#[\da-f]{3}|\#[\da-f]{6}|rgba\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)(,\s*(0\.\d+|1))\)|hsla\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)(,\s*(0\.\d+|1))\)|rgb\(((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*,\s*){2}((\d{1,2}|1\d\d|2([0-4]\d|5[0-5]))\s*)|hsl\(\s*((\d{1,2}|[1-2]\d{2}|3([0-5]\d|60)))\s*,\s*((\d{1,2}|100)\s*%)\s*,\s*((\d{1,2}|100)\s*%)\))$/";
    $input = preg_match($pattern, $input) ? $input : $default;
    return $input;
}

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress .= $_SERVER['HTTP_CLIENT_IP'] . ' - ';
    }
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress .= $_SERVER['HTTP_X_FORWARDED_FOR']. ' - ';
    }
    if(isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress .= $_SERVER['HTTP_X_FORWARDED']. ' - ';
    }
    if(isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress .= $_SERVER['HTTP_FORWARDED_FOR']. ' - ';
    }
    if(isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress .= $_SERVER['HTTP_FORWARDED']. ' - ';
    }
    if(isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress .= $_SERVER['REMOTE_ADDR']. ' - ';
    }

    if($ipaddress == '') {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}