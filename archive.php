<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crmn
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="archive__wrapper">
			<h1 class="archive__heading">NEWS.</h1>
			<div class="archive__main">
					<?php if (have_posts()): ?>
						<ul class="archive__list">
							<?php while (have_posts()) : the_post(); ?>
							<li class="archive__item">
								<article id="post-<?php the_ID(); ?>" <?php post_class('archive__article'); ?>>
									<div class="archive__meta">
										<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="archive__date"><?php echo get_post_time('Y.m.d'); ?></time><span class="archive__cat"><?php the_category(' '); ?></span>
										<h3 class="archive__title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
									</div>
								</article>
							</li>
							<?php endwhile; ?>
						</ul>
						<?php else: ?>
						<!-- 投稿が無い場合の処理 -->
					<?php endif; ?>
					<?php get_template_part('template-parts/pagination'); ?>
				</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
