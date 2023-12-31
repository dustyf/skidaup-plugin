<?php

/**
 * class file.
 *
 */
class SkiDaUP_Lost_Ski_Areas {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_cpt' ) );
	}

	public function register_cpt() {
		$labels = array(
			'name'               => _x( 'Lost Ski Areas', 'post type general name', 'skidaup' ),
			'singular_name'      => _x( 'Lost Ski Area', 'post type singular name', 'skidaup' ),
			'menu_name'          => _x( 'Lost Ski Areas', 'admin menu', 'skidaup' ),
			'name_admin_bar'     => _x( 'Lost Ski Area', 'add new on admin bar', 'skidaup' ),
			'add_new'            => _x( 'Add New', 'Lost Ski Area', 'skidaup' ),
			'add_new_item'       => __( 'Add New Ski Area', 'skidaup' ),
			'new_item'           => __( 'New Ski Area', 'skidaup' ),
			'edit_item'          => __( 'Edit Ski Area', 'skidaup' ),
			'view_item'          => __( 'View Ski Area', 'skidaup' ),
			'all_items'          => __( 'All Ski Areas', 'skidaup' ),
			'search_items'       => __( 'Search Ski Areas', 'skidaup' ),
			'parent_item_colon'  => __( 'Parent Ski Areas:', 'skidaup' ),
			'not_found'          => __( 'No Ski Areas found.', 'skidaup' ),
			'not_found_in_trash' => __( 'No Ski Areas found in Trash.', 'skidaup' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'lost-ski-area' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 30,
			'menu_icon'          => 'data:image/svg+xml;base64,' . base64_encode( '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
	   <g>
		   <g>
			   <path d="M482.197,43.99C472.112,16.284,446.065,0,419.484,0c-24.689,0-49.06,13.898-60.582,38.608
				   c-15.564,33.376-1.071,73.195,32.307,88.759c8.967,4.182,18.446,6.302,28.176,6.302C465.541,133.669,498.117,87.724,482.197,43.99
				   z"/>
		   </g>
	   </g>
	   <g>
		   <g>
			   <path d="M423.965,460.889c-8.36-3.894-18.293-0.282-22.191,8.076c-3.881,8.325-13.797,11.949-22.131,8.105L271.56,425.482
				   c-0.046-0.022-0.092-0.037-0.138-0.058l35.299-75.699c5.34-11.475,3.77-24.758-4.098-34.672l-50.134-63.175l30.538-24.425
				   c3.035,2.482,97.401,46.133,96.286,45.613c16.841,7.853,36.695,0.331,44.38-16.153c7.769-16.662,0.509-36.611-16.154-44.379
				   l-47.82-22.299l-27.621-75.89c-6.216-17.078-25.393-26.445-42.974-20.045c-5.349,2.077-51.725,39.417-80.238,62.322
				   c-24.421-11.388-53.383-24.893-68.648-32.012l7.056-15.134c3.897-8.358,0.281-18.293-8.076-22.19
				   c-8.357-3.895-18.293-0.281-22.19,8.077l-7.056,15.133l-15.134-7.056c-8.357-3.896-18.293-0.281-22.19,8.076
				   c-3.897,8.359-0.282,18.294,8.076,22.191l15.134,7.056l-7.056,15.134c-5.175,11.097,2.99,23.758,15.122,23.758
				   c6.288,0,12.312-3.57,15.144-9.646l7.056-15.132l53.531,24.962c-1.113,0.87-8.391,6.095-16.64,12.631
				   c-7.131,5.659-11.606,13.704-12.599,22.653c-0.97,8.727,1.506,17.275,6.967,24.069l80.039,101.097l-26.534,56.901L49.472,321.921
				   c-8.358-3.896-18.292-0.282-22.19,8.077c-3.897,8.358-0.281,18.293,8.076,22.19l329.977,155.056
				   c0.045,0.022,0.09,0.042,0.135,0.065c25.035,11.675,54.898,0.802,66.571-24.229C435.938,474.722,432.323,464.787,423.965,460.889z
				   "/>
		   </g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   <g>
	   </g>
	   </svg>' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' ),
		);

		register_post_type( 'skidaup_lost_area', $args );
	}

}