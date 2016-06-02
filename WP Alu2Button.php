<?php
/**
 * Plugin Name: WP Alu2Button
 * Plugin URI: 
 * Description: Add alu button to TinyMCE and add the alu expression in comment 
 * Version: 1.0.5
 * Author: hades
 * Author URI: https://blog.mayuko.cn/
 */

function mce_smiley_button($buttons) {	
	array_push($buttons, 'smiley');
	return $buttons;
}
add_filter('mce_buttons', 'mce_smiley_button');

function mce_smiley_js($plugin_array) {
	$plugin_array['smiley'] = plugins_url('/plugin.js',__FILE__);
	return $plugin_array;
}
add_filter('mce_external_plugins', 'mce_smiley_js');

function mce_smiley_css() {
	wp_enqueue_style('smiley', plugins_url('/plugin.css', __FILE__));
}
add_action( 'admin_enqueue_scripts', 'mce_smiley_css' );

function mce_smiley_settings($settings) {
	global $wpsmiliestrans;

	if (get_option('use_smilies')) {
		$keys = array_map('strlen', array_keys($wpsmiliestrans));
		array_multisort($keys, SORT_ASC, $wpsmiliestrans);
		$smilies = array_unique($wpsmiliestrans);
		$smileySettings = array(
			'smilies' => $smilies,
			'src_url' => apply_filters('smilies_src', includes_url('images/smilies/'), '', site_url())
		);
		echo '<script>var _smileySettings = ' . json_encode($smileySettings) . '</script>';
	}

	return $settings;
}
add_filter('tiny_mce_before_init', 'mce_smiley_settings');

define('ALU_VERSION', '1.0.5');
define('ALU_URL', plugins_url('', __FILE__));
define('ALU_PATH', dirname( __FILE__ ));
define('ALU_ADMIN_URL', admin_url());

/**
 * 加载函数
 */
require ALU_PATH . '/functions.php';
