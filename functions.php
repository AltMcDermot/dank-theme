<?php
// Add Menu
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
  register_nav_menus(
    array(
      'top' => __( 'Top Navigation' )
    )
  );
}
// Add post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 300, 275, true );

// Add widgets
if ( function_exists('register_sidebar'));
    register_sidebar(array('name'=>'aside'));

// Create post type for portfolio page
function my_custom_post_product() {
	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name' ),
		'singular_name'      => _x( 'Projects', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Project' ),
		'edit_item'          => __( 'Edit Project' ),
		'new_item'           => __( 'New Project' ),
		'all_items'          => __( 'All Projects' ),
		'view_item'          => __( 'View Project' ),
		'search_items'       => __( 'Search Project' ),
		'not_found'          => __( 'No projects found' ),
		'not_found_in_trash' => __( 'No projects found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Portfolio'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our project and specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'works', $args );	
}
add_action( 'init', 'my_custom_post_product' );


?>