<?php
/**
 * 
 * 
 */
add_action('wp_login', function(){
	$message  = wp_get_current_user()->user_login . ' logged-in.';
	$message .= "\r\n" . home_url();
	wp_mail( get_option('admin_email'), 'WordPerss Login Notification', $message );
}, 10, 2);
