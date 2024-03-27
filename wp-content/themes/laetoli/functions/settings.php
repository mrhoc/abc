<?php 

/**
 * Custom label of Excerpt
 */
function wpartisan_excerpt_label( $translation, $original ) {
  $locale = get_locale();
  
  if ( 'Excerpt' == $original && $locale == 'ja') {
    return __( '説明' );
  } 
  return $translation;
}
add_filter( 'gettext', 'wpartisan_excerpt_label', 10, 2 );

/**
 * Prevent auto adding p tags on contact form 7
 */
add_filter('wpcf7_autop_or_not', '__return_false');


// add_image_size( 'news_thumbnail', 1200, 630, true);

function resize_thumbnail_by_ratio($post_id) {
  $post_image_size = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full');
  $width = $post_image_size[1];
  $height = $post_image_size[2];
  $ratio_main = 1200 / 630;
  $ratio_image = $width / $height;
  $is_same_ratio_main = wp_image_matches_ratio(1200, 630, $width, $height);
  $html = get_the_post_thumbnail($post_id);
  // var_dump($html);

  if(!$is_same_ratio_main && $ratio_image < $ratio_main) {
      $html = substr_replace($html,'style="aspect-ratio: 1200/630"',-1,0);
  }

  return $html;
}

//Move acfs to end position on single recruit admin
add_action('acf/input/admin_head', 'acf_admin_recruit');

function acf_admin_recruit() {
    ?>
    <script type="text/javascript">
    (function($) {
        $(document).ready(function(){
            $('.post-type-recruit #postexcerpt').prependTo( $('.post-type-recruit #normal-sortables') );
        });
    })(jQuery);    
    </script>
    <?php    
    
}