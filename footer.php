
	<?php if ((!is_front_page()) && (!is_post_type_archive('works'))): ?>
		<div class="moreWorks">
			<h2 class="moreWorks__heading">MORE WORKS.</h2>
			<ul class="works__list">
			<?php
				$args = array( 'post_type' => 'works' );  // カスタム投稿タイプ Products
				$the_query = new WP_Query($args); if ($the_query->have_posts()):
			?>
			<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
				<li class="works__item">
					<article id="post-<?php the_ID(); ?>" <?php post_class('works__article'); ?>>
						<?php
							if (has_post_thumbnail()) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
								the_post_thumbnail();
							}
						?>
						<div class="works__meta">
							<h3 class="works__title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
							<?php $catch_copy = get_field('catch_copy');?>
								<?php if($catch_copy) { ?>
									<h4 class="works__catchCopy">
										<?php echo $catch_copy; ?>
									</h4>
								<?php } ?>
								<div class="works__moreLinkWrapper">
									<a href="<?php the_permalink(); ?>" class="works__moreLink">SEE MORE</a>
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
	<div class="contactButton">
		<a href="<?php echo home_url('/contact/') ?>" class="contactLink">CONTACT</a>
	</div>
	<footer class="footer">
		<div class="footer__main">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dark.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dark.png, <?php echo get_template_directory_uri(); ?>/assets/img/logo_dark@2x.png 2x" alt="" class="footer__logo"> -->
			<span>CROMAGNON.inc</span>
			<address class="footer__address">〒810-0022 福岡県hogefuga</address>
			<span class="footer__copyright">Copyright CROMAGNON&Co. All rights reserved</span>
		</div>
		<div class="footer__sub">
			<a href="<?php echo home_url('/privacy/'); ?>" class="footer__privacyLink">PRIVACY POLICY</a>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
