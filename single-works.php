<?php
get_header();
?>

	<main class="site-main">
		<div class="single-works__wrapper">
        <?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
        <div class="single__main">
          <article id="post-<?php the_ID(); ?>" <?php post_class('single__article'); ?>>
            <h2 class="single-works__subheading">OVERVIEW.</h2>
            <h1 class="single-works__title"><?php the_title(); ?></h1>
            <?php $catch_copy = get_field('catch_copy');?>
            <?php if ($catch_copy) { ?>
              <h4 class="works__catchCopy">
                <?php echo $catch_copy; ?>
              </h4>
            <?php } ?>
            <div class="single__meta">
              <?php the_content(); ?>
            </div>
        </article>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
