<?php
/**
 * Created by PhpStorm.
 * User: im
 * Date: 7/21/17
 * Time: 11:23 AM
 */


// Our custom post type function
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'archive-acme_project',
		array(
			'labels' => array(
				'name' => __( 'Projects' ),
				'singular_name' => __( 'Projects' )
			),
			'public' => true,
			'has_archive' => true,
			'supports'            => array( 'title', 'editor', 'thumbnail',),
			'taxonomies'          => array( 'category' )
		)
	);
}