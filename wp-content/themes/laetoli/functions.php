<?php
/**
 * laetoli's functions and definitions
 *
 * @package laetoli
 * @since laetoli 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */

global $ogp_page;
function set_ogb_page($ogb) {
  $GLOBALS['ogp_page'] = $ogb;
}
function get_ogb_page() {
  return $GLOBALS['ogp_page'];
}

if (!isset($content_width)) {
    $content_width = 800; /* pixels */
}


if (!function_exists('laetoli_setup')) :

    /**
     * Sets up theme defaults and registers support for various
     * WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme
     * hook, which runs before the init hook. The init hook is too late
     * for some features, such as indicating support post thumbnails.
     */
    function myfirsttheme_setup()
    {

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain('myfirsttheme', get_template_directory() . '/languages');

        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support('automatic-feed-links');

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
    }
endif; // myfirsttheme_setup
add_action('after_setup_theme', 'myfirsttheme_setup');

function disable_pdf_previews()
{
    $fallbacksizes = array();
    return $fallbacksizes;
}
add_filter(
    'fallback_intermediate_image_sizes',
    'disable_pdf_previews'
);

function render_partial( $file_name, $params = array() ) {
	extract( $params );
	include( get_template_directory() . "/" . $file_name );
}

/**
 * Auto data to work type select
 * [select work-type data:work-type]
*/
add_filter('wpcf7_form_tag_data_option', function($data, $options, $args) {
	$data = [];
	foreach ($options as $option) {
		if ($option === 'work-type') {
			$args = array(
        'post_type' => 'recruit',
        'order' => 'DESC',
        'posts_per_page'   => -1,
      );
  
      $recruit = get_posts($args);
      $recruit = array_column( $recruit , 'post_title' );
			$data = array_merge($data, $recruit);
		}
	}
	return $data;
}, 10, 3);
// Add this to your functions.php file

function polylang_flags_shortcode() {
    ob_start();
    pll_the_languages(array('show_flags'=>1,'show_names'=>1));
    $flags = ob_get_clean();
    return '<ul class="polylang-flags">' . $flags . '</ul>';
}
add_shortcode('POLYLANG', 'polylang_flags_shortcode');

/*
Add functions
*/
require_once('functions/ogp.php');
require_once('functions/custom-role.php');
require_once('functions/settings.php');