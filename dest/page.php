<?php 
/**
 * pages
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://developer.wordpress.org/files/2014/10/template-hierarchy.png
 * 
 */
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	
	<main id="post-<?php the_ID(); ?>" <?php post_class('p-page'); ?>>
		<article class="p-page__panel">

			<?php if ( get_the_post_thumbnail() ) :?>
				<figure class="p-page__thumb">
					<?php the_post_thumbnail(); ?>
				</figure>
			<?php endif; ?>

			<header class="p-page__header">
				<h1 class="p-page__title"><?php the_title(); ?></h1>
			</header>

			<div class="p-page__content">
				<?php the_content(); ?>
			</div>

			<footer class="p-page__footer">
			</footer>
			
		</article>
		
		<nav class="c-breadcrumb">
			<ol class="c-breadcrumb__list">
				<li class="c-breadcrumb__item"><a href="/">home</a></li>
				<li class="c-breadcrumb__item"><?php the_title(); ?></li>
			</ol>
		</nav><!-- m-breadcrumb -->
	</main>
	
<?php endwhile; ?>

<?php get_footer(); ?>