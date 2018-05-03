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