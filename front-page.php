<?php get_header(); ?>

	<main class="site-main">
		<?php get_template_part('template-parts/mainAnimation') ?>
		<div class="p-home-wrapper">
			<section class="p-home-works">
				<div class="p-home-works__header">
					<h2 class="u-subHeading fadein">
						<span class="sr-only">WORKS</span>
						<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/works_heading.png">
					</h2>
					<div class="p-home__seeAllLinkWrapper">
						<a href="<?php echo home_url('/works/') ?>" class="p-home__seeAllLink u-verdana">
							<span>SEE ALL</span>
							<span class="p-home__angle">></span>
						</a>
					</div>
				</div>
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php $args = array(
								'posts_per_page'   => 5,
								'post_type' => 'works',
								'meta_key' => 'is_show_home_slider',
							);
							$my_query = new WP_Query($args);
							$num = 1;
							if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
						?>
						<div class="swiper-slide">
							<?php if (has_post_thumbnail()) { ?>
								<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('large');
							} ?>
							<div class="p-home-worksMeta">
								<h3 class="p-works-title u-notosansJp">
									<a href="<?php the_permalink(); ?>" class="p-works-title__link">
										<span class="p-works__number">#<?php echo sprintf('%02d', $num) ?></span>
										<?php echo get_the_title(); ?>
									</a>
								</h3>
								<?php $catch_copy = get_field('catch_copy');?>
								<?php if ($catch_copy) { ?>
									<h4 class="p-works__catchCopy">
										<?php echo $catch_copy; ?>
									</h4>
								<?php } ?>
								<div class="p-works__moreLinkWrapper">
									<a href="<?php the_permalink(); ?>" class="works__moreLink u-verdana">SEE MORE</a>
								</div>
							</div>
							<?php $num += 1; ?>
						</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					</div>
					<div class="p-home-slider__buttons u-verdana">
						<div class="p-home-slider__button -prev">
							<span class="p-home-sliderButton__text">PREV</span>
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/arrow-left.png" alt="" class="p-home-slider__icon">
						</div>
						<div class="p-home-slider__button -next">
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/icons/arrow-right.png" alt="" class="p-home-slider__icon">
							<span class="p-home-sliderButton__text">NEXT</span>
						</div>
					</div>
				</div>
			</section>
			<section class="p-home-about l-section">
				<h2 class="u-subHeading fadein">
					<span class="sr-only">ABOUT</span>
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/about_heading.png">
				</h2>
				<div class="l-section__sub">
					<h3 class="p-home-about__catchcopy">魂をブランドに。</h3>
					<p class="p-home__paragraph">ブランドをつくるのは、ロゴデザインや商品、広告だけではありません。またブランディングとは、机上のストラテジーを与えられるままに実行することでもありません。創業者の想い。経営者の志。従業員のスピリッツ。脈々と受け継がれる企業や組織の魂が、有機的に刺激し合ってブランドはつくられるのです。私たちは、企業や組織の本質を紐解き、進むべき方向に光を当て、ともに走り続けます。パートナーと真正面から向き合い、激論を交わし、知恵を振り絞ります。眠れる魂を掘り起こし、世界にひとつのブランドを私たちとともにつくっていきましょう。</p>
				</div>
			</section>
			<section class="p-home__service l-section">
				<h2 class="u-subHeading fadein">
					<span class="sr-only">SERVICE</span>
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/service_heading.png">
				</h2>
				<div class="l-section__sub">
					<p class="p-home__paragraph">私たち「クロマニヨン」は、福岡を拠点とする、企業・自治体・事業・商品サービスのブランドを確立することにフォーカスしたブランディング・カンパニーです。皆様のどのような課題に、どのような解決策でお役に立てるのか？「クロマニヨン」の方針や考え方とともに解説します。</p>
					<ul class="p-home-service__list">
						<li class="p-home-service__item">
							<h3 class="p-home-service__itemHeading">
								<span class="sr-only">THINKING</span>
								<picture class="fadein">
									<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/service_thinking.webp" type="image/webp">
									<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/service_thinking.png" alt="">
								</picture>
							</h3>
							<a href="<?php echo home_url(); ?>" class="p-home-service__link">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/seemore.png" alt="seemore">
							</a>
						</li>
						<li class="p-home-service__item">
							<h3 class="p-home-service__itemHeading">
								<span class="sr-only">CLIENTS</span>
								<picture class="fadein">
									<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/service_clients.webp" type="image/webp">
									<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/service_clients.png" alt="">
								</picture>
							</h3>
							<a href="<?php echo home_url(); ?>" class="p-home-service__link">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/seemore.png" alt="seemore">
							</a>
						</li>
						<li class="p-home-service__item">
							<h3 class="p-home-service__itemHeading">
								<span class="sr-only">SOLUTION</span>
								<picture class="fadein">
									<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/service_solution.webp" type="image/webp">
									<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/service_solution.png" alt="">
								</picture>
							</h3>
							<a href="<?php echo home_url(); ?>" class="p-home-service__link">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/seemore.png" alt="seemore">
							</a>
						</li>
					</ul>
				</div>
			</section>
			<section class="p-home-news l-section">
				<div class="p-home-news__header">
					<h2 class="u-subHeading fadein">
						<span class="sr-only">NEWS</span>
						<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/news_heading.png">
					</h2>
					<div class="p-home__seeAllLinkWrapper">
						<a href="<?php echo home_url('/news/') ?>" class="p-home__seeAllLink u-verdana">
							<span>SEE ALL</span>
							<span class="p-home__angle">></span>
						</a>
					</div>
				</div>
				<ul class="p-home-news__list l-section__sub">
					<?php if (have_posts()): ?>
						<?php while (have_posts()) : the_post(); ?>
						<li class="p-home-news__item">
							<article id="post-<?php the_ID(); ?>" <?php post_class('p-home-news__article'); ?>>
								<div class="p-home-news__meta">
									<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-home-news__date"><?php echo get_post_time('Y.m.d'); ?></time><span class="p-home-news__cat"><?php the_category(' '); ?></span>
									<h3 class="p-home-news__title u-notosansJp"><a href="<?php the_permalink(); ?>" class="archive__link"><?php echo get_the_title(); ?></a></h3>
								</div>
							</article>
						</li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</section>
			<section class="p-home-member">
				<ul class="p-home-member__list">
					<li class="p-home-member__item -catchcopy">
						<picture class="p-home-member__picture">
							<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/member_heading.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/member_heading.png" alt="" class="p-home-member__image">
						</picture>
					</li>
					<li class="p-home-member__item">
						<a href="" class="js-modal-open" data-target="modal01">
							<span class="sr-only">KOYANAGI TOSHIRO</span>
							<span class="sr-only">CEO</span>
							<picture class="p-home-member__picture">
								<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/member_01.webp" type="image/webp">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/member_01.jpg" alt="" class="p-home-member__image">
							</picture>
							<div class="p-home-member__text">
							</div>
						</a>
					</li>
					<li class="p-home-member__item">
						<a href="" class="js-modal-open" data-target="modal02">
							<span class="sr-only">NONAKA SATOSHI</span>
							<span class="sr-only">COO</span>
							<picture class="p-home-member__picture">
								<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/member_02.webp" type="image/webp">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/member_02.jpg" alt="" class="p-home-member__image">
							</picture>
						</a>
					</li>
					<li class="p-home-member__item">
						<a href="" class="js-modal-open" data-target="modal03">
							<span class="sr-only">KANAI RYUTA</span>
							<span class="sr-only">PRODUCER</span>
							<picture class="p-home-member__picture">
								<source srcset="<?php echo get_template_directory_uri(); ?>/dist/images/home/member_03.webp" type="image/webp">
								<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/member_03.jpg" alt="" class="p-home-member__image">
							</picture>
						</a>
					</li>
				</ul>
				<div id="modal01" class="c-modal js-modal">
					<div class="c-modal__bg js-modal-close"></div>
					<div class="c-modal__content">
						<p>1つ目モーダルウィンドウです。ここにモーダルウィンドウで表示したいコンテンツを入れます。モーダルウィンドウを閉じる場合は下の「閉じる」をクリックするか、背景の黒い部分をクリックしても閉じることができます。</p>
						<a class="js-modal-close" href="">閉じる</a>
					</div>
				</div>
				<div id="modal02" class="c-modal js-modal">
					<div class="c-modal__bg js-modal-close"></div>
					<div class="c-modal__content">
						<p>2つ目モーダルウィンドウです。ここにモーダルウィンドウで表示したいコンテンツを入れます。モーダルウィンドウを閉じる場合は下の「閉じる」をクリックするか、背景の黒い部分をクリックしても閉じることができます。</p>
						<a class="js-modal-close" href="">閉じる</a>
					</div>
				</div>
				<div id="modal03" class="c-modal js-modal">
					<div class="c-modal__bg js-modal-close"></div>
					<div class="c-modal__content">
						<p>3つ目モーダルウィンドウです。ここにモーダルウィンドウで表示したいコンテンツを入れます。モーダルウィンドウを閉じる場合は下の「閉じる」をクリックするか、背景の黒い部分をクリックしても閉じることができます。</p>
						<a class="js-modal-close" href="">閉じる</a>
					</div>
				</div>
			</section>
			<section class="p-home-company l-section">
				<h2 class="u-subHeading fadein">
					<span class="sr-only">COMPANY</span>
					<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/company_heading.png">
				</h2>
				<div class="p-home-company__infoWrapper l-section__sub u-notosansJp">
					<dl class="p-home-company__info">
						<dt>社名</dt>
						<dd>株式会社クロマニヨン</dd>
					</dl>
					<dl class="p-home-company__info">
						<dt>代表者</dt>
						<dd>小栁俊郎</dd>
					</dl>
					<dl class="p-home-company__info">
						<dt>所在地</dt>
						<dd>〒810-0022　福岡市中央区薬院1丁目-16-17イビサビル4F</dd>
					</dl>
					<dl class="p-home-company__info">
						<dt>TEL</dt>
						<dd>092-231-0924</dd>
					</dl>
					<dl class="p-home-company__info">
						<dt>MAIL</dt>
						<dd>info@crmn.jp</dd>
					</dl>
					<dl class="p-home-company__info">
						<dt>資本金</dt>
						<dd>1,000,000円</dd>
					</dl>
					<dl class="p-home-company__info">
						<dt>社員</dt>
						<dd>3名</dd>
					</dl>
					<dl class="p-home-company__info">
						<dt>URL</dt>
						<dd>http://crmn.jp</dd>
					</dl>
				</div>
			</section>
			<section class="p-home-map">
				<div id="map"></div>
				<script
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCViDorf7Sq8IbYJbBAonu5tLbdrBPwWAE">
					async
				</script>
				<a href="#" class="p-home-map__link u-verdana">Google Map</a>
			</section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
