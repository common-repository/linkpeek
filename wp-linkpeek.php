<?php
/*
Plugin Name: LinkPeek 
Version: 0.2.5
Plugin URI: https://linkpeek.com
Description: LinkPeek is a web page screenshot service. Embed screenshots or link previews.
Author: Russell Ballestrini
Author URI: https://linkpeek.com
Sign up for an API key here: https://linkpeek.com/signup
*/

# Global config settings
define( 'APIKEY', '');
define( 'SECRET', '');

include 'liblinkpeek.php';

# register and enqueue stylesheet hover-lib.css
wp_register_style( 'linkpeek-hover-lib-style', plugins_url( 'linkpeek/hover-lib/css/hover-lib.css' ) );
wp_enqueue_style( 'linkpeek-hover-lib-style' );

# register hover-lib.js
wp_register_script( 'linkpeek-hover-lib-script', plugins_url( 'linkpeek/hover-lib/js/hover-lib.js' ) );

# enqueue hover-lib.js and jQuery
wp_enqueue_script( 'linkpeek-hover-lib-script','scriptpath', array(), '', true );
wp_enqueue_script( 'jquery' );

# PHP doesn't support named parameters.
# I have to set $src, $deps, $ver so that I can set $in_footer = true
# wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

function api_call( $args ){
    /***return the linkpeek.com api call string***/
    $apikey = (isset( $args['apikey'] )) ? $args['apikey'] : APIKEY;
    $secret = (isset( $args['secret'] )) ? $args['secret'] : SECRET;
    $size = (isset( $args['size'] )) ? $args['size'] : '336x240';
    return api_v1( $args['uri'], $size, $apikey, $secret );
}

function html_image( $args ){
    /***return html image markup***/
    $img = api_call( $args );
    $title = (isset( $args['text'] )) ? 'title="' . $args['text'] . '"' : ''; 
    $style = (isset( $args['style'] )) ? 'style="' . $args['style'] . '"' : ''; 
    return "<img src=\"$img\" $style $title />";
}
add_shortcode( 'linkpeek-image', 'html_image' );

function html_link_image( $args ){
    /***return html link image markup***/
    $uri = $args['uri'];
    $img = api_call( $args );
    $title = (isset( $args['text'] )) ? 'title="' . $args['text'] . '"' : ''; 
    $style = (isset( $args['style'] )) ? 'style="' . $args['style'] . '"' : ''; 
    return "<a href=\"$uri\" target=\"_blank\"><img src=\"$img\" $style $title /></a>";
}
add_shortcode( 'linkpeek-link-image', 'html_link_image' );
            
function hover_preview( $args ){
    /***return a link with linkpeek hover preview***/
    $uri = $args['uri'];
    $img = api_call( $args );
    $text = (isset( $args['text'] )) ? $args['text'] : $uri;
    $style = (isset( $args['style'] )) ? 'style="' . $args['style'] . '"' : ''; 
    return "<a href=\"$uri\" class=\"hover-lib\" id=\"$img\" $style target=\"_blank\">$text</a>";
}
add_shortcode( 'linkpeek-hover', 'hover_preview' );

function save_page( $args ){
    /***return a link to the full height original screenshot of the current page***/
    $args['uri'] = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $args['size'] = 'original';
    $uri = $args['uri'];
    $img = api_call( $args );
    $text = (isset( $args['text'] )) ? $args['text'] : $uri;
    $style = (isset( $args['style'] )) ? 'style="' . $args['style'] . '"' : ''; 
    return "<a href=\"$img\" $style target=\"_blank\">$text</a>";
}
add_shortcode( 'linkpeek-save-page', 'save_page' );

