<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="l-header" class="l-header">
		<div class="l-header__hammenu -sp">
			<?php the_custom_logo(); ?>
			<span class="l-header__trigger" href="#" @click="toggleMenu" id="trigger">
				<span></span>
				<span></span>
				<span></span>
			</span>
			<div class="l-header__hammenuWrapper">
				<div class="l-header__hammenuInner">
					<?php
						wp_nav_menu(array(
								'theme_location' => 'primary'
						));
					?>
				</div>
			</div>
		</div>
		<nav class="l-header__nav -pc">
			<?php the_custom_logo(); ?>
			<?php
				wp_nav_menu(array('theme_location' => 'primary'));
      ?>
		</nav>
		<?php if(function_exists('bcn_display')) ?>
		<div class="l-header__breadcrumbs">
			<?php {
				bcn_display();
			} ?>
		</div>
	</header>