<?php
function dt_enqueue_styles()
{
  $parenthandle = 'divi-style';
  $theme = wp_get_theme();
  wp_enqueue_style(
    $parenthandle,
    get_template_directory_uri() . '/style.css',
    array(), // if the parent theme code has a dependency, copy it to here
    $theme->parent()->get('Version')
  );

  wp_enqueue_style(
    'child-style',
    get_stylesheet_uri(),
    array($parenthandle),
    $theme->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'dt_enqueue_styles');

/**
 * Custom Landing Page Enqueue scripts and styles.
 */
function lp_scripts()
{
  if (is_page_template('landing-page.php')) {
    $swiper_css = '/lib/swiper/swiper-bundle.min.css';
    $fancybox_css = '/lib/fancybox/jquery.fancybox.min.css';
    $icomoon_css = '/lib/icomoon/style.css';
    $style_css = '/assets/css/style.css';
    wp_enqueue_style('lp-swiper', get_theme_file_uri() . $swiper_css, [], wp_get_theme()->get('Version'));
    wp_enqueue_style('lp-fancybox', get_theme_file_uri() . $fancybox_css, [], wp_get_theme()->get('Version'));
    wp_enqueue_style('lp-icomoon', get_theme_file_uri() . $icomoon_css, [], wp_get_theme()->get('Version'));
    wp_enqueue_style('lp-style', get_theme_file_uri() . $style_css, [], wp_get_theme()->get('Version'));

    $jquery = '/lib/jquery.min.js';
    $swiper_js = '/lib/swiper/swiper-bundle.min.js';
    $fancybox_js = '/lib/fancybox/jquery.fancybox.min.js';
    // $rezdy_js = 'https://cabosailing.rezdy.com/pluginJs';
    $main_js = '/assets/js/main.js';
   
    wp_enqueue_script('lp-jquery', get_theme_file_uri() . $jquery, [], wp_get_theme()->get('Version'), true);
    wp_enqueue_script('lp-swiper', get_theme_file_uri() . $swiper_js, [], wp_get_theme()->get('Version'), true);
    wp_enqueue_script('lp-fancybox', get_theme_file_uri() . $fancybox_js, [], wp_get_theme()->get('Version'), true);
    // wp_enqueue_script('lp-rezdy', get_theme_file_uri() . $rezdy_js, [], wp_get_theme()->get('Version'), true);
    wp_enqueue_script('lp-script', get_theme_file_uri() . $main_js, [], wp_get_theme()->get('Version'), true);
  }
}
add_action('wp_enqueue_scripts', 'lp_scripts', 999);

function start_output_buffer()
{
  if (is_page_template('landing-page.php')) {
    ob_start('remove_inline_css');
  }
}
add_action('template_redirect', 'start_output_buffer');

function remove_inline_css($buffer)
{
  // Pattern to match the inline CSS style block
  $pattern = '/<style id="et-divi-customizer-global-cached-inline-styles">(.*?)<\/style>/s';

  // Remove the inline CSS style block
  $buffer = preg_replace($pattern, '', $buffer);

  return $buffer;
}

// Disable the 'Main default_theme scripts and styles.'
function disable_default_theme_scripts_styles()
{
	if (is_page_template('landing-page.php')) {
		// wp_deregister_script('popup-maker-site');
		// wp_dequeue_script('popup-maker-site');
		wp_deregister_script('divi-custom-script');
		wp_dequeue_script('divi-custom-script');
		wp_deregister_script('modula-divi-frontend-bundle');
		wp_dequeue_script('modula-divi-frontend-bundle');
	}
}
add_action('wp_enqueue_scripts', 'disable_default_theme_scripts_styles', 999);
