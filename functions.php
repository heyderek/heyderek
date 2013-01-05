<?php

function gallery_init() {
  $labels = array(
    'name' => 'Project',
    'singular_name' => 'Project',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Project',
    'edit_item' => 'Edit Project',
    'new_item' => 'New Project',
    'all_items' => 'All Projects',
    'view_item' => 'View Project',
    'search_items' => 'Search Projects',
    'not_found' =>  'No projects found',
    'not_found_in_trash' => 'No projects found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Gallery'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 10,
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'thumbnail', 'revisions' )
  );
  
  register_post_type('gallery' , $args );
  
}

add_action( 'init', 'gallery_init' );