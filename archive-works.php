<?php
/**
 * The template for displaying archive-works pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crmn
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="archive-works__wrapper">
			<h1 class="archive-works__heading"> WORKS.</h1>
			<div class="archive-works__main">
					<?php if (have_posts()): ?>
						<ul class="p-works__list">
							<?php while (have_posts()) : the_post(); ?>
							<li class="p-works__item">
								<article id="post-<?php the_ID(); ?>" <?php post_class('p-works__article'); ?>>
                  <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail();
                    }
                  ?>
									<div class="p-works__meta">
										<h3 class="p-works__title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                    <?php $catch_copy = get_field('catch_copy');?>
                      <?php if($catch_copy) { ?>
                        <h4 class="p-works__catchCopy">
                          <?php echo $catch_copy; ?>
                        </h4>
                      <?php } ?>
                      <div class="p-works__moreLinkWrapper">
                        <a href="<?php the_permalink(); ?>" class="p-works__moreLink">SEE MORE</a>
                      </div>
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
