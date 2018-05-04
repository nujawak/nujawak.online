<?php
/**
 * nujawak_get_excerpt
 * 
 * @param  string  $content
 * @param  integer $max
 * @param  string  $suffix
 * @return string
 */
function nujawak_get_excerpt( $content = '', $max = 200, $suffix = '' ){
	$content = esc_html( strip_tags( (string)$content ) );
	$content = preg_replace('/\n/', '', $content);

	return mb_strimwidth( $content, 0, (int)$max, (string)$suffix );
}


/**
 * nujawak_the_excerpt
 * 
 * @param  string  $content
 * @param  integer $max
 * @param  string  $suffix
 * @return echo HTML
 */
function nujawak_the_excerpt( $content = '', $max = 200, $suffix = '' ){
	echo nujawak_get_excerpt( $content, $max, $suffix );
}

/**
 * nujawak_get_logo
 * 
 * @return string
 */
function nujawak_get_logo() {
	$markup = '<img src="%1$s" alt="%2$s">';
	$src    = get_stylesheet_directory_uri() . '/resources/media/logo-site.svg';
	$alt    = get_bloginfo('name');
	
	return sprintf($markup, $src, $alt);
}

/**
 * nujawak_the_logo
 * 
 * @return echo HTML
 */
function nujawak_the_logo() {
	echo nujawak_get_logo();
}

/**
 * nujawak_get_homelink
 * 
 * @return string
 */
function nujawak_get_homelink() {
	$markup = '<a href="%1$s">%2$s</a>';
	$href   = get_home_url();
	
	return sprintf($markup, $href, nujawak_get_logo());
}

/**
 * nujawak_the_homelink
 * 
 * @return echo HTML
 */
function nujawak_the_homelink() {
	echo nujawak_get_homelink();
}

