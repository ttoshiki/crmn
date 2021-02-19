
	<?php if ((!is_front_page()) && (!is_page('works'))): ?>
		<div class="moreWorks">
			<ul class="moreWorks__list">
				<li class="moreWorks__item">
					<img src="" alt="">
					<div class="moreWorks__Text">
						<h3 class="moreWorks__heading">事例タイトル</h3>
						<p class="moreWorks__catch">事例キャッチコピーが入ります。</p>
						<a href="" class="moreWorks__link">SEE MORE</a>
					</div>
				</li>
				<li class="moreWorks__item">
					<img src="" alt="">
					<div class="moreWorks__Text">
						<h3 class="moreWorks__heading">事例タイトル</h3>
						<p class="moreWorks__catch">事例キャッチコピーが入ります。</p>
						<a href="" class="moreWorks__link">SEE MORE</a>
					</div>
				</li>
				<li class="moreWorks__item">
					<img src="" alt="">
					<div class="moreWorks__Text">
						<h3 class="moreWorks__heading">事例タイトル</h3>
						<p class="moreWorks__catch">事例キャッチコピーが入ります。</p>
						<a href="" class="moreWorks__link">SEE MORE</a>
					</div>
				</li>
				<li class="moreWorks__item">
					<img src="" alt="">
					<div class="moreWorks__Text">
						<h3 class="moreWorks__heading">事例タイトル</h3>
						<p class="moreWorks__catch">事例キャッチコピーが入ります。</p>
						<a href="" class="moreWorks__link">SEE MORE</a>
					</div>
				</li>
			</ul>
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
