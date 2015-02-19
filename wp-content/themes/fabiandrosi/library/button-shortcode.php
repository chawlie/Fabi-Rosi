<?php

function cButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<a class="page-link button" href="'.$link.'">' . do_shortcode($content) . '</a>';
  }
add_shortcode('button', 'cButton');

?>