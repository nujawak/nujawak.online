<?php 
/**
 * archive page
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://developer.wordpress.org/files/2014/10/template-hierarchy.png
 * 
 */
?>
<?php get_header(); ?>


<div class="p-archive">
	<header class="p-archive__header">
		<h2 class="p-archive__title"><?php the_archive_title(); ?></h2>
	</header><!-- p-archive__header -->

	<div class="p-archive__content">
			<?php if ( have_posts() ) :?>

				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('p-archive-item'); ?>>
						<header class="p-archive-item__header">
							<h3 class="p-archive-item__title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
							<div class="p-archive-item__meta">
								<time class="p-archive-item__time" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
								<p class="p-archive-item__categories"><?php the_category( ', ' ); ?></p>
							</div><!-- p-archive-item__meta -->
						</header>
						
						<div class="p-archive-item__content">
							<p><?php nujawak_the_excerpt(get_the_content(), 300, '...'); ?></p>
							<a class="p-archive-item__link" href="<?php the_permalink(); ?>">続きを読む</a>
						</div>
					</article>
				<?php endwhile; ?>
				
			<?php else: ?>
				
				<div class="p-archive-item">
					<div class="p-archive-item__content u-text-center">
						<p>post not found.</p>
					</div>
				</div>
				
			<?php endif; ?>
	</div><!-- p-archive__content -->
</div><!-- p-archive -->

<div class="c-breadcrumb">
	<ol class="c-breadcrumb__list">
		<li class="c-breadcrumb__item"><a href="/">home</a></li>
		
		<?php if ( is_category() ): ?>
			<li class="c-breadcrumb__item"><a href="/blog/">blog</a></li>
			<li class="c-breadcrumb__item"><?php the_archive_title(); ?></li>
		<?php else: ?>
			<li class="c-breadcrumb__item">blog</li>
		<?php endif; ?>
	</ol>
</div><!-- m-breadcrumb -->

<?php get_footer(); ?>