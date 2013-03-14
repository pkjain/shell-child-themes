<?php
/*****************************************
 * script enqueue/dequeue
 *****************************************/
function scc_enqueue_dequeue_scripts () {
  // don't need fitvids for now
  wp_dequeue_script( 'shell-fitvids');
}
add_action('wp_enqueue_scripts', 'scc_enqueue_dequeue_scripts', 1000);


/*****************************************
 * everything needed after_setup_theme
 *****************************************/
function scc_after_setup_theme_callback() {
  $prefix = hybrid_get_prefix();
  add_action( "{$prefix}_byline", 'scc_byline_code');
  add_action( "{$prefix}_footer_content", 'scc_footer_content_code');
  add_action( "{$prefix}_entry_meta", 'scc_entry_meta_code');

  // theme support add/remove
  remove_theme_support('breadcrumb-trail');
  remove_theme_support('get-the-image');
  add_theme_support( 'post-thumbnails' ); // seems like get-the-image removal was not adding it also
}
add_action('after_setup_theme', 'scc_after_setup_theme_callback', 11);


/* Display only date in byline */
function scc_byline_code() {
  echo do_shortcode('<div class="byline">[entry-published] [entry-edit-link before=" | "]</div>');
}


/* child-link as well in footer */
function scc_footer_content_code() {
  $content = '<p class="copyright">' . __( 'Copyright &#169; [the-year] [site-link].', 'shell' ) . '</p>' . "\n\n" . '<p class="credit">' . __( 'Powered by [wp-link], [theme-link], and [child-link].', 'shell' ) . '</p>';
  echo do_shortcode($content);
}


/* Remove leave comment from entry_meta */
function scc_entry_meta_code() {
  $content = '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="| Tagged "]', 'shell' ) . '</div>';
  echo do_shortcode($content);
}


/*****************************************
 * filters
 *****************************************/
// Read more link
function scc_excerpt_more($more) {
  global $post;
  return ' <a href="'. get_permalink($post->ID) . '"><span class="read-more-link">read more<span></a>';
}
add_filter('excerpt_more', 'scc_excerpt_more', 999);

// Except length override default 55 
function scc_excerpt_length( $length ) {
  return 40;
}
add_filter( 'excerpt_length', 'scc_excerpt_length', 999 );


?>
