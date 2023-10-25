<?php

/**
 * class file.
 *
 */
class SkiDaUP_Videos {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_cpt' ) );
	}

	public function register_cpt() {
		$labels = array(
			'name'               => _x( 'Videos', 'post type general name', 'skidaup' ),
			'singular_name'      => _x( 'Video', 'post type singular name', 'skidaup' ),
			'menu_name'          => _x( 'Videos', 'admin menu', 'skidaup' ),
			'name_admin_bar'     => _x( 'Video', 'add new on admin bar', 'skidaup' ),
			'add_new'            => _x( 'Add New', 'Video', 'skidaup' ),
			'add_new_item'       => __( 'Add New Video', 'skidaup' ),
			'new_item'           => __( 'New Video', 'skidaup' ),
			'edit_item'          => __( 'Edit Video', 'skidaup' ),
			'view_item'          => __( 'View Video', 'skidaup' ),
			'all_items'          => __( 'All Videos', 'skidaup' ),
			'search_items'       => __( 'Search Videos', 'skidaup' ),
			'parent_item_colon'  => __( 'Parent Videos:', 'skidaup' ),
			'not_found'          => __( 'No Videos found.', 'skidaup' ),
			'not_found_in_trash' => __( 'No Videos found in Trash.', 'skidaup' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'video' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 30,
			'menu_icon'          => 'dashicons-video-alt3',
			'supports'           => array( 'title', 'editor', 'thumbnail' ),
		);
		register_post_type( 'skidaup_video', $args );

		$labels = array(
			'name'                       => _x( 'Video Categories', 'Taxonomy General Name', 'skidaup' ),
			'singular_name'              => _x( 'Video Category', 'Taxonomy Singular Name', 'skidaup' ),
			'menu_name'                  => __( 'Video Category', 'skidaup' ),
			'all_items'                  => __( 'All Items', 'skidaup' ),
			'parent_item'                => __( 'Parent Item', 'skidaup' ),
			'parent_item_colon'          => __( 'Parent Item:', 'skidaup' ),
			'new_item_name'              => __( 'New Item Name', 'skidaup' ),
			'add_new_item'               => __( 'Add New Item', 'skidaup' ),
			'edit_item'                  => __( 'Edit Item', 'skidaup' ),
			'update_item'                => __( 'Update Item', 'skidaup' ),
			'view_item'                  => __( 'View Item', 'skidaup' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'skidaup' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'skidaup' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'skidaup' ),
			'popular_items'              => __( 'Popular Items', 'skidaup' ),
			'search_items'               => __( 'Search Items', 'skidaup' ),
			'not_found'                  => __( 'Not Found', 'skidaup' ),
			'no_terms'                   => __( 'No items', 'skidaup' ),
			'items_list'                 => __( 'Items list', 'skidaup' ),
			'items_list_navigation'      => __( 'Items list navigation', 'skidaup' ),
		);
		$rewrite = array(
			'slug'                       => 'videos',
			'with_front'                 => true,
			'hierarchical'               => true,
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => false,
			'query_var'                  => 'videos',
			'rewrite'                    => $rewrite,
			'show_in_rest'               => true,
		);
		register_taxonomy( 'skidaup_video_category', array( 'skidaup_video' ), $args );
	}

}