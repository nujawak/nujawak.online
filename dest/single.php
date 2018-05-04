<?php 
/**
 * single
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://developer.wordpress.org/files/2014/10/template-hierarchy.png
 * 
 */
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	
	<main id="post-<?php the_ID(); ?>" <?php post_class('p-single'); ?>>
		<article class="p-single__panel">

			<header class="p-single__header">
				<h1 class="p-single__title"><?php the_title(); ?></h1>
				<div class="p-single__meta">
					<time class="p-single__time" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
					<p class="p-single__categories"><?php the_category( ', ' ); ?></p>
				</div><!-- p-single__meta -->
			</header>

			<?php if ( get_the_post_thumbnail() ) :?>
				<figure class="p-single__thumb">
					<?php the_post_thumbnail(); ?>
				</figure>
			<?php endif; ?>

			<div class="p-single__content">
				<?php the_content(); ?>
			</div>

			<footer class="p-single__footer">
				
			</footer>
			
		</article>
		
		<nav class="c-breadcrumb">
			<ol class="c-breadcrumb__list">
				<li class="c-breadcrumb__item"><a href="/">home</a></li>
				<li class="c-breadcrumb__item"><a href="/blog/">blog</a></li>
				<li class="c-breadcrumb__item"><?php the_category( ', ' ); ?></li>
				<li class="c-breadcrumb__item"><?php the_title(); ?></li>
			</ol>
		</nav><!-- m-breadcrumb -->
	</main>
	
<?php endwhile; ?>
 
<?php get_footer(); ?>