<?php

add_theme_support('post-thumbnails'); 

//Add Gallery Post Type
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
  
  register_post_type('project' , $args );
  
}

add_action( 'init', 'gallery_init' );

function project_tax_init() {
  $labels = array(
    'name' => _x('pTags','taxonomy general name'),
    'singular_name' => _x('pTag', 'taxonomy singular name'),
    'search_items' => __('Search pTags'),
    'all_items' => __('All pTags'),
    'parent_item' => __('Parent pTags'),
    'parent_item_colon' => __('Parent pTags:'),
    'edit_item' => __('Edit pTags'),
    'update_item' => __('Update pTags'),
    'add_new_item' => __('Add New pTag'),
    'new_item_name' => __('New ptag Name'),
    'menu_name' => __('pTags'),
  );
  register_taxonomy('ptags',array('project'),array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'hierarchical' => false,
    'query_var' => true,
    'rewrite' => array('slug' => 'ptag'),
  ));
}
add_action('init', 'project_tax_init', 0);