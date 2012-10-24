<?php
/*
Author: Fernando A. Damião
Author URI: https://github.com/fadamiao
Plugin Name: Mr. Short
Plugin URI: https://github.com/fadamiao/mr.short
Description: Adiciona Shortcodes, essa versão só possui Shortcodes para Redes Sociais.
Version: 0.1.3
*/

$mrshort_icons_path = get_settings('home').'/wp-content/plugins/mr.short/icons/';

// ======== Declaring Shortcodes ========
// ====== Facebook Shortcode ======
function facebook_shortcode($atts, $content = null) {
	global $mrshort_icons_path;
	extract(shortcode_atts(array("size" => '32', "type" => "normal"), $atts));
    return "<a href=\"https://www.facebook.com/{$content}\"><img src=\"{$mrshort_icons_path}facebook_{$type}_{$size}.png\" alt=\"Like Me!!\" /></a>";
}

// ====== GitHub Shortcode ======
function github_shortcode($atts, $content = null) {
	global $mrshort_icons_path;
	extract(shortcode_atts(array("size" => '32', "type" => "normal"), $atts));
    return "<a href=\"https://github.com/{$content}\"><img src=\"{$mrshort_icons_path}github_{$type}_{$size}.png\" alt=\"Code with me!!\" /></a>";
}

// ====== GPlus Shortcode ======
function gplus_shortcode($atts, $content = null) {
	global $mrshort_icons_path;
	extract(shortcode_atts(array("size" => '32', "type" => "normal"), $atts));
    return "<a href=\"http://plus.google.com/{$content}\"><img src=\"{$mrshort_icons_path}gplus_{$type}_{$size}.png\" alt=\"Be in my circles!!\" /></a>";
}

// ====== LinkedIn Shortcode ======
function linkedin_shortcode($atts, $content = null) {
	global $mrshort_icons_path;
	extract(shortcode_atts(array("size" => '32', "type" => "normal"), $atts));
    return "<a href=\"http://linkedin.com/in/{$content}\"><img src=\"{$mrshort_icons_path}linkedin_{$type}_{$size}.png\" alt=\"LinkUp with me!!\" /></a>";
}

// ====== RSS Shortcode ====
function rss_shortcode($atts, $content = null) {
	global $mrshort_icons_path;
	$rss_path = get_settings('home').'/feed/';
	extract(shortcode_atts(array("size" => '32', "type" => "normal"), $atts));
    return "<a href=\"{$rss_path}\"><img src=\"{$mrshort_icons_path}rss_{$type}_{$size}.png\" alt=\"RSS Feed\" /></a>"; 
}

// ====== Twitter Shortcode ======
function twitter_shortcode($atts, $content = null) {
	global $mrshort_icons_path;
	extract(shortcode_atts(array("size" => '32', "type" => "normal"), $atts));
    return "<a href=\"http://twitter.com/#!/{$content}\"><img src=\"{$mrshort_icons_path}twitter_{$type}_{$size}.png\" alt=\"Follow me!!\" /></a>";
}

// ======== Adding Shortcodes ========
add_shortcode('facebook', 'facebook_shortcode');
add_shortcode('github', 'github_shortcode');
add_shortcode('gplus', 'gplus_shortcode');
add_shortcode('linkedin', 'linkedin_shortcode');
add_shortcode('rss','rss_shortcode');
add_shortcode('twitter', 'twitter_shortcode');

// ======== Enabling Shortcode to Widgets ========
add_filter('widget_text','shortcode_unautop');
add_filter('widget_text','do_shortcode');
