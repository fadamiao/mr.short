<?php
/*
Author: Fernando A. Damião 
Author URI: https://github.com/fa-damiao 
Plugin Name: Mr Short 
Plugin URI: https://github.com/fa-damiao/mr.short 
Description: Adds shortcodes, this version is for socialicons 
Version: 0.1 
*/

// ======== Declaring Shortcodes ========
// ====== Facebook Shortcode ======
function facebook_shortcode( $atts, $content = null ) {
	$icons_path = get_settings('home').'/wp-content/plugins/mr.short/icons/';
	extract(shortcode_atts(array("type" => '32'), $atts));  
    return '<a href="http://www.facebook.com/'.$content.'"><img src="'.$icons_path.'/facebook_'.$type.'.png" alt="Like Me!!"/></a>'; 
}

// ====== GitHub Shortcode ======
function github_shortcode( $atts, $content = null ) {
	$icons_path = get_settings('home').'/wp-content/plugins/mr.short/icons/';
	extract(shortcode_atts(array("type" => '32'), $atts));  
    return '<a href="https://github.com/'.$content.'"><img src="'.$icons_path.'/github_'.$type.'.png" alt="See my codes!!"/></a>'; 
}

// ====== GPlus Shortcode ======
function gplus_shortcode( $atts, $content = null ) {
	$icons_path = get_settings('home').'/wp-content/plugins/mr.short/icons/';
	extract(shortcode_atts(array("type" => '32'), $atts));  
    return '<a href="http://plus.google.com/'.$content.'"><img src="'.$icons_path.'/gplus_'.$type.'.png" alt="Be in my circles!!"/></a>'; 
}

// ====== LinkedIn Shortcode ======
function linkedin_shortcode( $atts, $content = null ) {
	$icons_path = get_settings('home').'/wp-content/plugins/mr.short/icons/';
	extract(shortcode_atts(array("type" => '32'), $atts));  
    return '<a href="http://linkedin.com/in/'.$content.'"><img src="'.$icons_path.'/linkedin_'.$type.'.png" alt="LinkUp with me!!"/></a>'; 
}

// ====== Twitter Shortcode ======
function twitter_shortcode( $atts, $content = null ) {
	$icons_path = get_settings('home').'/wp-content/plugins/mr.short/icons/';
	extract(shortcode_atts(array("type" => '32'), $atts));  
    return '<a href="http://twitter.com/#!/'.$content.'"><img src="'.$icons_path.'/twitter_'.$type.'.png" alt="Retweet me!!"/></a>'; 
}

// ======== Adding Shortcodes ========
add_shortcode('facebook', 'facebook_shortcode');
add_shortcode('github', 'github_shortcode');
add_shortcode('gplus', 'gplus_shortcode');
add_shortcode('linkedin', 'linkedin_shortcode');
add_shortcode('twitter', 'twitter_shortcode');

?>
