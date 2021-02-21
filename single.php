<?php
get_header();
?>

	<main class="site-main">
		<div class="single__wrapper">
      <h1 class="l-heading">NEWS</h1>
			<div class="single__main">
				<?php if (have_posts()): ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class('single__article'); ?>>
						<?php while (have_posts()) : the_post(); ?>
							<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="single__date"><?php echo get_post_time('Y.m.d'); ?></time>
							<h2 class="single__title"><?php echo get_the_title(); ?></h2>
							<div class="single__meta">
								<?php the_content(); ?>
							</div>
							<?php endwhile; ?>
					</article>
				<?php endif; ?>
				<a href="<?php echo home_url('/news/'); ?>" class="c-btn">一覧に戻る</a>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
