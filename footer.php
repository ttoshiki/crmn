
	<?php if ((!is_front_page()) && (!is_post_type_archive('works'))): ?>
		<div class="moreWorks">
			<h2 class="moreWorks__heading">MORE WORKS.</h2>
			<ul class="p-works__list">
			<?php
				$args = array( 'post_type' => 'works' );  // カスタム投稿タイプ Products
				$the_query = new WP_Query($args); if ($the_query->have_posts()):
			?>
			<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
				<li class="p-works__item">
					<article id="post-<?php the_ID(); ?>" <?php post_class('p-works__article'); ?>>
						<?php
							if (has_post_thumbnail()) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
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
			<?php wp_reset_postdata(); ?>
			<?php else: ?>
			<!-- 投稿が無い場合の処理 -->
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<div class="c-contactButton">
		<div class="c-contactButton__inner">
			<a href="<?php echo home_url('/contact/') ?>" class="c-contactLink">
				<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/contact_button_label.png" class="c-contactButton__label">
			</a>
		</div>
	</div>
	<footer class="l-footer">
		<div class="l-footer__links">
			<div class="l-footer__logo"><?php echo file_get_contents(get_template_directory_uri() . '/dist/images/logo.svg'); ?></div>
			<a href="<?php echo home_url('/privacy/'); ?>" class="l-footer__privacyLink">
				<img src="<?php echo get_template_directory_uri(); ?>/dist/images/privacy_policy.png" class="l-footer__privacyText">
			</a>
	</div>
	<div class="l-footer__bottom">
		<address class="l-footer__address u-notosansJp">〒810-0022　福岡県福岡市中央区薬院1丁目16−17イビサビル4F</address>
		<span class="l-footer__copyright">Copyright CROMAGNON&Co. All rights reserved</span>
	</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
