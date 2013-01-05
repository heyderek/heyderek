<?php

//Add image thumbnail support
add_theme_support('post-thumbnails'); 

//Add image sizes
add_image_size('project-thumbnail', 605, 605, true );

//Change the excerpt and make it pretty.
function readmore_excerpt($more) {
  global $post;
  return '<a class="excerpt-link" href="' .get_permalink($post-ID) . '">Read Some More</a>';
}

add_filter('excerpt_more', 'readmore_excerpt');

//Call in Gallery Post Type
require_once('admin/gallery.php');

//Call in Meta boxes
require_once('admin/metaboxes.php');

//Initialize the MetaBox Class
function cmb_initialize_cmb_meta_boxes() {
  if ( ! class_exists( 'cmb_Meta_Box' ) )
    require_once 'init.php';

}
