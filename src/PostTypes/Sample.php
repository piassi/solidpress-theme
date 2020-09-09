<?php

namespace Theme\PostTypes;

use SolidPress\Core\PostType;

/**
 * Register 'sample' custom post type
 */
class Sample extends PostType {
	/**
	 * Set custom post type args
	 */
	public function __construct() {
        $this->post_type = 'sample';

		$labels = array(
			'name'               => _x( 'Sample', 'Post Type Labels', 'SolidPress-bio' ),
			'singular_name'      => _x( 'Sample', 'Post Type Labels', 'SolidPress-bio' ),
			'menu_name'          => _x( 'Samples', 'Post Type Labels', 'SolidPress-bio' ),
			'all_items'          => _x( 'Todos os Itens', 'Post Type Labels', 'SolidPress-bio' ),
			'add_new'            => _x( 'Adicionar novo', 'Post Type Labels', 'SolidPress-bio' ),
			'add_new_item'       => _x( 'Adicionar novo Sample', 'Post Type Labels', 'SolidPress-bio' ),
			'edit_item'          => _x( 'Editar Sample', 'Post Type Labels', 'SolidPress-bio' ),
			'new_item'           => _x( 'Novo Sample', 'Post Type Labels', 'SolidPress-bio' ),
			'view_item'          => _x( 'Ver Sample', 'Post Type Labels', 'SolidPress-bio' ),
			'insert_into_item'   => _x( 'Inserir no Sample', 'Post Type Labels', 'SolidPress-bio' ),
			'view_items'         => _x( 'Ver Samples', 'Post Type Labels', 'SolidPress-bio' ),
			'search_items'       => _x( 'Perquisar Samples', 'Post Type Labels', 'SolidPress-bio' ),
			'not_found'          => _x( 'Nenhum Sample encontrado', 'Post Type Labels', 'SolidPress-bio' ),
			'not_found_in_trash' => _x( 'Nenhum Sample encontrado na Lixeira', 'Post Type Labels', 'SolidPress-bio' ),
		);

		$this->args = array(
			'label'               => _x( 'Sample', 'Post Type Labels', 'SolidPress-bio' ),
			'labels'              => $labels,
			'description'         => '',
			'public'              => true,
			'publicly_queryable'  => false,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => false,
			'show_in_menu'        => true,
			'exclude_from_search' => true,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'menu_position'       => 8,
			'rewrite'             => false,
			'query_var'           => true,
			'supports'            => array( 'title', 'thumbnail', 'excerpt' ),
			'menu_icon'           => 'dashicons-book-alt',
			'taxonomies'          => array(),
		);
	}
}
