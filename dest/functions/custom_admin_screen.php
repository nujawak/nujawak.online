<?php
/**
 * 選択済みカテゴリーを並べ替えてトップにおく機能を停止
 * 
 */
add_action( 'wp_terms_checklist_args', function( $args, $post_id = null ){
	$args['checked_ontop'] = false;
	return $args;
} );
