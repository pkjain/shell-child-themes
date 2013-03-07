<?php

// Don't display breadcrumb-trail
function scc_after_setup_theme_callback() {
  remove_theme_support('breadcrumb-trail');
}
// Priority 11 to ensure it is executed in the end
add_action('after_setup_theme', 'scc_after_setup_theme_callback', 11);


// Only display date in byline
function scc_byline_code() {
  echo do_shortcode('<div class="byline">[entry-published]</div>');
}
function scc_after_setup_function_callback() {
  $prefix = hybrid_get_prefix();
  add_action( "{$prefix}_byline", 'scc_byline_code');
}
add_action('after_setup_theme', 'scc_after_setup_function_callback', 11);

?>
