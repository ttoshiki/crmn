	<footer class="footer">
		<?php if ((!is_page('service')) && (!is_page('service-pcr'))): ?>
			<div class="footer__links">
				<div class="footer__linksBlock">
					<div class="footer__linksBlockInner">
						<h3 class="footer__linkHeading">フォームからお問い合わせ</h3>
						<a href="<?php echo home_url('/contact/'); ?>" class="footer__linkButton">お問い合わせはこちら</a>
					</div>
				</div>
				<div class="footer__linksBlock">
					<div class="footer__linksBlockInner">
						<h3 class="footer__linkHeading">電話でのお問い合わせ</h3>
						<small class="footer__businessHours">営業時間 ／ 9:00〜18:00（土日祝日を除く)</small>
						<address class="footer__address">TEL 045-323-4610</address>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dark.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo_dark.png, <?php echo get_template_directory_uri(); ?>/assets/img/logo_dark@2x.png 2x" alt="" class="footer__logo"> -->
		<nav class="footer__nav">
			<?php
        wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container_class' => 'menu-primary-container',
        ));
        wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container_class' => 'menu-footer-container',
        ));
      ?>
		</nav>
		<?php if (!is_singular('product')): ?>
			<aside class="fixedMenu">
				<a href="<?php echo home_url('/contact/'); ?>" class="fixedMenu__link">
					お問い合わせ
				</a>
				<a href="<?php echo home_url('/download/'); ?>" class="fixedMenu__link">
					資料ダウンロード
				</a>
			</aside>
		<?php endif; ?>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
