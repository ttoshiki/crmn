<?php get_header(); ?>

	<main class="site-main">
		<?php get_template_part('template-parts/mainAnimation') ?>
		<div class="p-home-wrapper">
			<section class="p-home-works">
				<div class="p-home-worksHeader">
					<h2 class="subHeading fadein">
						<span class="sr-only">WORKS</span>
						<img src="<?php echo get_template_directory_uri(); ?>/dist/images/home/works_heading.png">
					</h2>
					<a href="<?php echo home_url('/works/') ?>" class="p-home__SeeAllLink verdana">SEE ALL</a>
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
							<?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
							<div class="p-home-worksMeta">
								<h3 class="p-works__title">
									<a href="<?php the_permalink(); ?>">
										<span>#<?php echo sprintf('%02d', $num) ?></span>
										<?php echo get_the_title(); ?>
									</a>
								</h3>
								<?php $catch_copy = get_field('catch_copy');?>
								<?php if ($catch_copy) { ?>
									<h4 class="works__catchCopy">
										<?php echo $catch_copy; ?>
									</h4>
								<?php } ?>
								<div class="works__moreLinkWrapper">
									<a href="<?php the_permalink(); ?>" class="works__moreLink">SEE MORE</a>
								</div>
							</div>
							<?php $num += 1; ?>
						</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="p-home-sliderButtons">
					<div class="p-home-sliderButton -prev">PREV</div>
					<div class="p-home-sliderButton -next">NEXT</div>
				</div>
			</section>
			<section class="p-home__about">
				<h2 class="subHeading">ABOUT US.</h2>
				<h3 class="p-home__aboutHeading">強いブランドへ、共に</h3>
				<p class="p-home__aboutParagprah">私たち「クロマニオン」は</p>
			</section>
			<section class="p-home__service">
				<h2 class="subHeading">OUR SERVICE.</h2>
				<p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
				<ul class="p-home-service__list">
					<li class="p-home-service__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dummy_1.jpg" alt="">
						<h3 class="p-home-service__itemHeading">THINKING</h3>
						<a href="<?php echo home_url(); ?>" class="p-home-service__link">
							<span class="p-home-service__linkSpan">SEE MORE</span>
						</a>
					</li>
					<li class="p-home-service__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dummy_1.jpg" alt="">
						<h3 class="p-home-service__itemHeading">CLIENTS</h3>
						<a href="<?php echo home_url(); ?>" class="p-home-service__link">
							<span class="p-home-service__linkSpan">SEE MORE</span>
						</a>
					</li>
					<li class="p-home-service__item">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dummy_1.jpg" alt="">
						<h3 class="p-home-service__itemHeading">SOLUTION</h3>
						<a href="<?php echo home_url(); ?>" class="p-home-service__link">
							<span class="p-home-service__linkSpan">SEE MORE</span>
						</a>
					</li>
				</ul>
			</section>
			<section class="p-home-news">
				<div class="p-home-news__header">
					<h2 class="subHeading">NEWS.</h2>
					<a href="">SEE ALL</a>
				</div>
				<ul class="archive__list">
					<?php if (have_posts()): ?>
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
					<?php endif; ?>
				</ul>
			</section>
			<section class="p-home-member">
				<ul class="p-home-member__list">
					<li class="p-home-member__item -catchcopy">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dummy_2.jpg" alt="" class="p-home-member__catchcopyImage">
						<span class="p-home-member__catchcopy">WE ARE <br>CROMAGNONS.</span>
					</li>
					<li class="p-home-member__item">
						<a href="" class="js-modal-open" data-target="modal01">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dummy_2.jpg" alt="" class="p-hom-member__image">
							<div class="p-home-member__text">
								<span class="p-home-member__name">KOYANAGI<br>TOSHIRO</span>
								<span class="p-home-member__position">CEO</span>
							</div>
						</a>
					</li>
					<li class="p-home-member__item">
						<a href="" class="js-modal-open" data-target="modal02">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dummy_2.jpg" alt="" class="p-home-member__image">
							<div class="p-home-member__text">
								<span class="p-home-member__name">NONAKA<br>SATOSHI</span>
								<span class="p-home-member__position">DIRECTOR</span>
							</div>
						</a>
					</li>
					<li class="p-home-member__item">
						<a href="" class="js-modal-open" data-target="modal03">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/dummy_2.jpg" alt="" class="p-home-member__image">
							<div class="p-home-member__text">
								<span class="p-home-member__name">KANAI<br>RYUTA</span>
								<span class="p-home-member__position">DIRECTOR</span>
							</div>
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
			<section class="p-home-company">
				<h2 class="subHeading">COMPANY.</h2>
				<dl class="p-home-company__info">
					<dt>社名</dt>
					<dd>株式会社クロマニヨン</dd>
				</dl>
				<dl class="p-home-company__info">
					<dt>所在地</dt>
					<dd>hoge</dd>
				<dl class="p-home-company__info">
					<dt>TEL</dt>
					<dd>092-231-0924</dd>
				</dl>
				<dl class="p-home-company__info">
					<dt>資本金</dt>
					<dd>1,000,000円</dd>
				</dl>
				<dl class="p-home-company__info">
					<dt>設立</dt>
					<dd>2020年5月14日</dd>
				</dl>
			</section>
			<section class="p-home-map">
				<div id="map"></div>
				<script
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsk6Izz5aDyGxCeqExkUYJkolIKV5LpwE&map_ids=db75605afda0c7cd&callback=initMap">
					async
				</script>
			</section>
		</div>
	</main><!-- #main -->

<?php
get_footer();
