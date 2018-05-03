<?php
/**
 * programming の子カテゴリの一覧を表示する
 * 
 */
add_shortcode( 'list_programming_categories', function( $user_atts = array() ){
	// set params
	$user_atts = shortcode_atts( array(
		'class_ul' => '',
		'class_li' => '',
	), $user_atts );

	// init
	$output     = '';
	$categories = get_categories( array(
		'type'       => 'post',
		'child_of'   => (int)get_cat_id( 'プログラミング' ),
		'hide_empty' => false,
		) );

	// 
	if ( ! empty($categories) ) :
		foreach ( $categories as $category ) :
			$li_class = 'cat-item cat-' . $category->slug . ' ' . $user_atts['class_li'];
			$li_link  = get_category_link( $category->term_id );
			
			if ( 0 === $category->count ) :
				$li_class = 'cat-empty ' . $li_class;
				$li_inner = $category->name;
			else:
				$li_inner = sprintf('<a href="%1$s">%2$s</a>', $li_link, $category->name);
			endif;

			$output .= sprintf('<li class="%1$s">%2$s</li>', $li_class, $li_inner);
		endforeach;
	else:
		$output .= '<li class="cat-item cat-not-found">post not found.</li>';
	endif;

	// 
	return '<ul class="cat-list ' . $user_atts['class_ul'] . '">' . $output . '</ul>';
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
	
	return sprintf('<%1$s class="u-youtube %2$s"><iframe src="https://www.youtube.com/embed/%3$s?rel=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe></%1$s>', $user_atts['wrap'], $user_atts['class'], $user_atts['video_id']);
});