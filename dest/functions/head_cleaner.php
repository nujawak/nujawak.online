<?php
/**
 * wp_head()から余計な項目を削除
 * 
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'se_global_head');
add_filter( 'emoji_svg_url', '__return_false' );


/**
 * wp_head()からREST API関連の項目を削除
 *
 * @link http://qiita.com/kuck1u/items/c879271aa280da62c573
 * @link https://wordpress.org/support/topic/wp-44-remove-json-api-and-x-pingback-from-http-headers
 */
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11);
add_filter('rest_jsonp_enabled', '__return_false');
add_action( 'wp_footer', function (){
	wp_deregister_script( 'wp-embed' );
});
