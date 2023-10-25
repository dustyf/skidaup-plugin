<?php

/**
 * class file.
 *
 */
class SkiDaUP_P2P_Connections {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'p2p_init', array( $this, 'register' ) );
	}

	function register() {
		p2p_register_connection_type( array(
			'name' => 'posts_to_ski_area',
			'from' => 'post',
			'to'   => 'skidaup_ski_area',
		) );

		p2p_register_connection_type( array(
			'name' => 'video_to_ski_area',
			'from' => 'skidaup_video',
			'to'   => 'skidaup_ski_area',
		) );
	}

}