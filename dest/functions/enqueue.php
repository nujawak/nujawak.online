<?php
/**
 * 
 * 
 */
add_action( 'wp_enqueue_scripts', function(){
	// google font
	wp_enqueue_style(
		'google-font',
		'https://fonts.googleapis.com/css?family=Open+Sans:400,700',
		'',
		'1.0'
	);
	
	// main css
	wp_enqueue_style(
		'style',
		get_stylesheet_directory_uri() . '/resources/css/style.min.css',
		'',
		'1.0'
	);
	
	// main script
	wp_enqueue_script(
		'script',
		get_stylesheet_directory_uri() . '/resources/js/script.min.js',
		'',
		'1.0',
		true
	);

	// SyntaxHighlighter
	if ( is_singular( 'post' ) ) :
		wp_enqueue_script(
			'SyntaxHighlighter',
			get_stylesheet_directory_uri() . '/lib/SyntaxHighlighter/syntaxhighlighter.js',
			'',
			'4.0',
			true
		);
	endif;
});
