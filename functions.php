<?php
/**
 * crmn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package crmn
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (! function_exists('crmn_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function crmn_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on crmn, use a find and replace
         * to change 'crmn' to the name of your theme in all the template files.
         */
        load_theme_textdomain('crmn', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => esc_html__('Main Menu', 'crmn'),
                'footer' => esc_html__('Footer Menu', 'crmn'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'crmn_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'crmn_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crmn_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('crmn_content_width', 640);
}
add_action('after_setup_theme', 'crmn_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function crmn_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'crmn'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'crmn'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'crmn_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function crmn_scripts()
{
    wp_enqueue_style('crmn-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('crmn-style', 'rtl', 'replace');

    wp_register_style('notosansjp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('notosansjp');

    wp_enqueue_script('jquery');

    wp_enqueue_script('main-script', get_template_directory_uri() . '/dist/main.js', array(), '', true);

    if (is_front_page()) {
        // wp_enqueue_script('gsap-scripts', get_template_directory_uri() . '/assets/js/lib/gsap.min.js', array(), '', true);
        // wp_enqueue_script('main-animation-scripts', get_template_directory_uri() . '/assets/js/main-animation.js', array(), '', true);
        // wp_register_style('swiper-style', get_template_directory_uri() . '/assets/css/lib/swiper-bundle.min.css', array(), '1.0', 'all');
        // wp_enqueue_style('swiper-style');
        // wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/assets/js/lib/swiper-bundle.min.js', array(), '', false);
        // wp_enqueue_script('home-scripts', get_template_directory_uri() . '/assets/js/home.js', array(), '', false);
    }

}
add_action('wp_enqueue_scripts', 'crmn_scripts');

/* 投稿アーカイブを有効にしてスラッグを指定する */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; // スラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/*********************************
 トップページNEWSの表示件数を変更
**********************************/
function change_posts_per_page($query)
{
    if (is_front_page()) {
        $query->set('posts_per_page', '4');
        return $query;
    }
}
add_filter('pre_get_posts', 'change_posts_per_page');


// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function official_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'prev_text' => __('PREV'),
        'next_text' => __('NEXT'),
        'mid_size' => 2,
        'total' => $wp_query->max_num_pages
    ));
}

// contactFormのメール確認
add_filter('wpcf7_validate_email', 'wpcf7_validate_email_filter_confrim', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_validate_email_filter_confrim', 11, 2);
function wpcf7_validate_email_filter_confrim($result, $tag)
{
    $type = $tag['type'];
    $name = $tag['name'];
    if ('email' == $type || 'email*' == $type) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)) { //確認用メルアド入力フォーム名を ○○○_confirm としています。
            $target_name = $matches[1];
            $posted_value = trim((string) $_POST[$name]); //前後空白の削除
                $posted_target_value = trim((string) $_POST[$target_name]); //前後空白の削除
            if ($posted_value != $posted_target_value) {
                $result->invalidate($tag, "確認用のメールアドレスが一致していません");
            }
        }
    }
    return $result;
}

// パンくずリスト
function my_static_breadcrumb_adder($breadcrumb_trail)
{
    // アーカイブページはNEWSのリンクなし
    if (is_archive() && !is_post_type_archive('works')) {
        $item = new bcn_breadcrumb('NEWS', null, array('post'));
        $stuck = array_pop($breadcrumb_trail->breadcrumbs); // HOME 一時退避
        $breadcrumb_trail->breadcrumbs[] = $item; //NEWS 追加
        $breadcrumb_trail->breadcrumbs[] = $stuck; //HOME 戻す
    }

    // 記事ページはNEWSのリンクあり
    if (is_single() && !is_singular('works')) {
        $item = new bcn_breadcrumb('NEWS', null, array('post'), '/news/', null, true);
        $stuck = array_pop($breadcrumb_trail->breadcrumbs); // HOME 一時退避
        $breadcrumb_trail->breadcrumbs[] = $item; //NEWS 追加
        $breadcrumb_trail->breadcrumbs[] = $stuck; //HOME 戻す
    }
}
add_action('bcn_after_fill', 'my_static_breadcrumb_adder');