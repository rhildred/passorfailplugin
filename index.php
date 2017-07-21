<?php
/*
Plugin Name: Pass or Fail 2
*/
function passorfail2_shortcodes_init()
{
    function passorfail2_shortcode($atts = [], $content = null)
    {
        
        $content .= file_get_contents(__DIR__ . "/passorfailcalculator.html");
        return $content;
    }
    add_shortcode('passorfail2-plugin', 'passorfail2_shortcode');
}
add_action('init', 'passorfail2_shortcodes_init');