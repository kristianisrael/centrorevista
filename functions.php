<?php

  if( !is_admin()){
   wp_deregister_script('jquery'); 
   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"), false, '1.9.0'); 
   wp_enqueue_script('jquery');
}
add_custom_background();
add_theme_support('post-thumbnails');
if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
add_image_size('portada', 1200, 450, true);
add_image_size('portada_thumb', 280, 112, true);
add_image_size('hlight', 218, 144, true);
add_image_size('cat_thumb', 94, 85, true);
add_image_size('hot', 220, 145, true);
add_image_size('sidebar', 140, 106, true);
add_image_size('sidebar_thumb', 41, 31, true);
add_image_size('trend_side', 281, 295, true);
add_image_size('trend_thumb', 89, 92, true);
add_image_size('single_big', 460, 800, true);
add_image_size('cumple', 116, 141, true);
add_image_size('top_ad', 940, 90, true);
add_image_size('right_top_ad', 280, 250, true);
add_image_size('right_bottom_ad', 280, 170, true);
add_image_size('middle_ad', 220, 160, true);
add_image_size('left_ad', 160, 322, true);
add_image_size('other_ad', 460, 80, true);

}

add_filter( 'jpeg_quality', 'tgm_image_full_quality' );
add_filter( 'wp_editor_set_quality', 'tgm_image_full_quality' );
/**
 * Filters the image quality for thumbnails to be at the highest ratio possible.
 *
 * Supports the new 'wp_editor_set_quality' filter added in WP 3.5.
 *
 * @since 1.0.0
 *
 * @param int $quality The default quality (90)
 * @return int $quality Amended quality (100)
 */
function tgm_image_full_quality( $quality ) {
 
    return 100;
 
}

automatic_feed_links();

add_action( 'init', 'my_custom_menus' );
function my_custom_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'... Leer más»';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

    function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'... Leer más»';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
    }

function has_parent($post, $post_id) {
  if ($post->ID == $post_id) return true;
  else if ($post->post_parent == 0) return false;
  else return has_parent(get_post($post->post_parent),$post_id);
}

function show_posts_nav() {
  global $wp_query;
  return ($wp_query->max_num_pages > 1);
}
if ( function_exists('register_sidebar') ){
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li></ul>',
		'before_title' => '<ul class="sideframe">',
		'after_title' => '',));
}

// --------------------------------------------------------------------------
// Start Add NextPage Button
// --------------------------------------------------------------------------
add_filter('mce_buttons','wysiwyg_editor');
function wysiwyg_editor($mce_buttons) {
    $pos = array_search('wp_more',$mce_buttons,true);
    if ($pos !== false) {
        $tmp_buttons = array_slice($mce_buttons, 0, $pos+1);
        $tmp_buttons[] = 'wp_page';
        $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons, $pos+1));
    }
    return $mce_buttons;
}
// --------------------------------------------------------------------------
// End Add NextPage Button
// --------------------------------------------------------------------------
?>