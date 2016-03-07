<?php

function add_post_type($name)
{
	add_action('init', function() use($name) {
		$upper_name = ucwords($name);
		register_post_type( $upper_name, array(
			'public' => true,
			'label' => $upper_name,
			'labels' => array(
					'add_new_item' => "Add New $upper_name",
					'view_item' => "View $upper_name",
					'edit_item' => "Edit $upper_name",
					'all_items' => "All $upper_name" . "s",
					'singular_name' => $upper_name
	 			),
			'supports' => array('title','editor'),
			'taxonomies' => array('category', 'post_tag'),
			'has_archive' => true,
		));
	});
}

function add_taxonomy($name, $post_type) {
	$name = strtolower($name);
	add_action('init', function() use($name, $post_type) {
		$upper_name = str_replace('_', ' ', $name);
		$plural_name = ucwords($upper_name) . 's';
		$upper_name = ucwords($upper_name);
		register_taxonomy($name, $post_type, array(
			'label' => "$name",
			'labels' => array(
					'name' => "$upper_name",
					'singular_name' => "$name",
					'menu-name' => "$plural_name",
					'all_items' => "All $plural_name",
					'edit_item' => "Edit $upper_name",
					'view_item' => "View $upper_name",
					'update_item' => "Update $upper_name",
					'add_new_item' => "Add New $upper_name",
					'new_item_name' => "New $upper_name Name",
					'search_items' => "Search $plural_name",
					'add_or_remove_items' => "Add or Remove $pluralname",
					'choose_from_most_used' => "Choose from the most used $pluralname",
					'not_found' => 'No $pluralname found.',
				),
			'hierarchical' => true,
			'show_admin_column' => true,
			'show_in_quick_edit' => true,
		));
	});
}

?>