<?php
/*
Plugin Name: Simple OGP embed
Plugin URI: https://www.faircode.eu/
Description: Simple OGP embed
Version: 0.1
Author: Marcel Bokhorst
Author URI: https://www.faircode.eu/
*/

/*
	Copyright 2016 Marcel Bokhorst
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('wp_head', 'm66b_wp_head');

function m66b_wp_head() {
  $obg_global = get_ogb_page();
  $title_default = 'LAETOLI株式会社';

	if (is_single() || is_page()) {
		// Get blog info
		$charset = get_bloginfo('charset');
		$locale = get_bloginfo('language');
		$locale = (empty($locale) ? 'en_US' : str_replace('-', '_', $locale));
		if (strlen($locale) == 2)
			$locale = strtolower($locale) . '_' . strtoupper($locale);
		$title = html_entity_decode(get_bloginfo('title'), ENT_QUOTES, $charset);

		// Get post info
		$post = get_post();

    if($obg_global['title']) $post_title = $obg_global['title'].' | '.$title_default;
    else {
      $post_title = html_entity_decode(get_the_title($post->ID), ENT_QUOTES, $charset);
      if(str_contains($post_title, 'Page')) {
        $post_title = $title_default;
      }
    }

		// Get post content
		$content = $post->post_content;
		if (function_exists('m66b_handle_gphotos_embed'))
			$content = preg_replace_callback('#https\://goo\.gl/photos/(.+)#i', function ($matches) {
				return m66b_handle_gphotos_embed($matches, null, trim($matches[0]), null);
			}, $content);

		// Get post excerpt
    $excerpt = null;
    if($obg_global['description']) $excerpt = $obg_global['description'];
    else {
      $excerpt = get_the_excerpt($post->ID);
      if($excerpt == null) {
        $excerpt = trim(strip_tags(strip_shortcodes($content)));
        $words = explode(' ', $excerpt, 55 + 1);
        if (count($words) > 55) {
          array_pop($words);
          array_push($words, '…');
          $excerpt = implode(' ', $words);
        }
      }
    }


		// Get featured image
		$picture = null;
    if($obg_global['image']) $picture = $obg_global['image'];
		else if (current_theme_supports('post-thumbnails')) {
			$featured_image_id = get_post_thumbnail_id($post->ID);
			if ($featured_image_id) {
				$src = wp_get_attachment_image_src($featured_image_id, 'medium');
				if ($src)
					$picture = $src[0];
			}
		}

		// Set logo of site
		if ($picture == null) {
      $picture = get_template_directory_uri() . '/assets/images/logo-ogp.jpg';
		}

		// Render ogp meta tags
		echo '<!-- Start M66B OGP -->' . PHP_EOL;
    echo '<meta name="twitter:card" content="summary_large_image" />' . PHP_EOL;
    echo '<meta name="twitter:site" content="Laetoli" />'  . PHP_EOL;
    echo '<meta name="twitter:creator" content="Laetoli" />'  . PHP_EOL;
    echo '<meta name="twitter:title" content="' . esc_attr($post_title) . '" />'  . PHP_EOL;
    echo '<meta name="twitter:description" content="' . esc_attr($excerpt) . '" />'  . PHP_EOL;

		echo '<meta property="og:title" content="' . esc_attr($post_title) . '" />' . PHP_EOL;
		// echo '<meta property="og:type" content="article" />' . PHP_EOL;
		if ($picture) {
      echo '<meta name="twitter:image" content="' . esc_attr($picture) . '" />'  . PHP_EOL;
			echo '<meta property="og:image" content="' . esc_attr($picture) . '" />' . PHP_EOL;
    }
		echo '<meta property="og:url" content="' . esc_attr(get_permalink($post->ID)) . '" />' . PHP_EOL;
		echo '<meta property="og:site_name" content="' . esc_attr($title) . '" />' . PHP_EOL;
		echo '<meta property="og:description" content="' . esc_attr($excerpt) . '" />' . PHP_EOL;
		echo '<meta property="og:locale" content="' . esc_attr($locale) . '" />' . PHP_EOL;
    echo '<meta name="description" content="' . esc_attr($excerpt) . '" />' . PHP_EOL;
		echo '<!-- End M66B OGP -->' . PHP_EOL;
	}
}

?>