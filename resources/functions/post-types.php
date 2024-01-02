<?php

/**
 * Use this file to register any custom post types you wish to create.
 */
if (!function_exists('tgk_create_custom_post_type')) {
	// Register Custom Post Type
	function tgk_create_custom_post_type()
	{
		register_post_type('san-pham', array(
			'label'               => __('Sản Phẩm', 'tgk'),
			'description'         => __('Sản Phẩm', 'tgk'),
			//'labels'                => $labels,
			'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
			'taxonomies'          => array(''),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'		  => 'dashicons-products',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
		));

	}
	add_action('init', 'tgk_create_custom_post_type', 0); 
}

if (!function_exists('tgk_create_custom_taxonomy')) {
	function tgk_create_custom_taxonomy()
	{
		register_taxonomy('loai-san-pham', array('san-pham'), array(
			'labels'            => array(
				'name'          => _x('Loại Sản Phẩm', 'Taxonomy General Name', 'tgk'),
				'singular_name' => _x('Loại Sản Phẩm', 'Taxonomy Singular Name', 'tgk'),
				'menu_name'     => __('Loại Sản Phẩm', 'tgk'),
				'all_items'         => __('Tất cả loại sản phẩm', 'tgk'),
				'edit_item'         => __('Chỉnh sửa loại sản phẩm', 'tgk'),
				'update_item'       => __('Cập nhật loại sản phẩm', 'tgk'),
				'add_new_item'      => __('Thêm mới loại sản phẩm', 'tgk'),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_in_rest'      => true,

		));
	}

	add_action('init', 'tgk_create_custom_taxonomy', 0);
}
