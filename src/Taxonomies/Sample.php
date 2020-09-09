<?php

namespace Theme\Taxonomies;

use SolidPress\Core\Taxonomy;

/**
 * Register 'sample_tax' taxonomy
 */
class Sample extends Taxonomy {
	/**
	 * Set custom post type args
	 */
	public function __construct() {
		$this->taxonomy   = 'sample_tax';
		$this->post_types = array( 'post' );

		// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'              => _x( 'Sample taxonomies', 'taxonomy general name', 'SolidPress-bio' ),
			'singular_name'     => _x( 'Sample taxonomy', 'taxonomy singular name', 'SolidPress-bio' ),
			'search_items'      => __( 'Search Sample taxonomies', 'SolidPress-bio' ),
			'all_items'         => __( 'All Sample taxonomies', 'SolidPress-bio' ),
			'parent_item'       => __( 'Parent Sample taxonomy', 'SolidPress-bio' ),
			'parent_item_colon' => __( 'Parent Sample taxonomy:', 'SolidPress-bio' ),
			'edit_item'         => __( 'Edit Sample taxonomy', 'SolidPress-bio' ),
			'update_item'       => __( 'Update Sample taxonomy', 'SolidPress-bio' ),
			'add_new_item'      => __( 'Add New Sample taxonomy', 'SolidPress-bio' ),
			'new_item_name'     => __( 'New Sample taxonomy Name', 'SolidPress-bio' ),
			'menu_name'         => __( 'Sample taxonomy', 'SolidPress-bio' ),
		);

		$this->args = array(
			'public'             => true,
			'publicly_queryable' => false,
			'hierarchical'       => true,
			'labels'             => $labels,
			'show_ui'            => true,
			'show_admin_column'  => true,
			'query_var'          => false,
			'rewrite'            => false, // array( 'slug' => 'sample-tax' )
		);
	}
}
