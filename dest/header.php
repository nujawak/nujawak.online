<?php 
/**
 * header
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="c-header">
	<h2 class="c-header__logo u-font-futura"><?php bloginfo( 'name' ); ?></h2>
</header>