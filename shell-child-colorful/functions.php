<?php


function scc_after_setup_theme_callback() {
  remove_theme_support('breadcrumb-trail');
}

// Priority 11 to ensure it is executed in the end
add_action('after_setup_theme', 'scc_after_setup_theme_callback', 11);


?>
