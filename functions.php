<?php

//Add image sizes
add_image_size('project-thumbnail', 605, 605, true );

//Call in Gallery Post Type
require_once('admin/gallery.php');

//Call in Meta boxes
require_once('admin/metaboxes.php');

//Initialize the MetaBox Class
function cmb_initialize_cmb_meta_boxes() {
  if ( ! class_exists( 'cmb_Meta_Box' ) )
    require_once 'init.php';

}
