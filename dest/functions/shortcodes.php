<?php
/**
 * programming の子カテゴリの一覧を表示する
 * 
 */
add_shortcode( 'list_programming_categories', function( $user_atts = array() ){
	// set params
	$user_atts = shortcode_atts( array(
		'class_ul' => 'c-categories',
		'class_li' => 'c-categories__item',
	), $user_atts );

	// init
	$format_ul  = '<ul class="%1$s">%2$s</ul>';
	$format_li  = '<li class="%1$s">%2$s</li>';
	$format_a   = '<a href="%1$s">%2$s</a>';
	$list_items = ''; // output HTML li
	$categories = get_categories( array(
		'child_of'   => (int)get_cat_id( 'プログラミング' ),
		'hide_empty' => false,
		) );

	// 
	if ( ! empty($categories) ) :
		foreach ( $categories as $category ) :
			$li_class = (string)$user_atts['class_li'];
			$li_link  = get_category_link( $category->term_id );
			$li_inner = sprintf($format_a, $li_link, $category->name);

			// empty category
			if ( 0 === $category->count ) :
				$li_inner = $category->name; // override
			endif;

			// append
			$list_items .= sprintf($format_li, $li_class, $li_inner);
		endforeach;
	else:
		$list_items = sprintf($format_li, 'cat-not-found', 'post not found.');
	endif;

	// return
	return sprintf($format_ul, (string)$user_atts['class_ul'], $list_items);
});


/**
 * youtube の iframe をアスペクト比固定のwrapで包んで表示
 * 
 */
add_shortcode( 'youtube', function( $user_atts = array() ){
	// set params
	$user_atts = shortcode_atts( array(
		'video_id' => '',
		'class'    => '',
		'wrap'     => 'p',
	), $user_atts );
	
	if ( empty($user_atts['video_id']) ) :
		return '';
	endif;
	
	// escape
	foreach ( $user_atts as $key => $value ) :
		$user_atts[$key] = esc_attr( $value );
	endforeach;
	
	return sprintf('<%1$s class="u-aspect-youtube %2$s"><iframe src="https://www.youtube.com/embed/%3$s?rel=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe></%1$s>', $user_atts['wrap'], $user_atts['class'], $user_atts['video_id']);
});