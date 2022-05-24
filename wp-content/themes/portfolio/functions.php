<?php

add_action('init', 'portfolio_boot_theme', 1);
function portfolio_boot_theme()
{
	load_theme_textdomain('portfolio', __DIR__ . '/locales');

	if (! session_id()) {
		session_start();
	}
}

add_filter('use_block_editor_for_post', '__return_false');
add_theme_support('post-thumbnails');
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
	$filetype = wp_check_filetype( $filename, $mimes );
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4 );


// Create CPT
register_post_type('projets', [
	'label' => 'Projets',
	'labels' => [
		'name' => 'Projets',
		'singular_name' => 'Projet',
	],
	'description' => 'Les posts qui décrivent des projets.',
	'public' => true,
	'has_archive' => true,
	'menu_position' => 2,
	'menu_icon' => 'dashicons-format-gallery',
	'supports' => ['title','editor','thumbnail'],
	'rewrite' => ['slug' => 'projects'],
]);
register_post_type('socials', [
	'label' => 'Réseaux sociaux',
	'labels' => [
		'name' => 'Réseaux sociaux',
		'singular_name' => 'Réseau social',
	],
	'description' => 'Les posts qui décrivent des réseaux sociaux.',
	'public' => true,
	'has_archive' => true,
	'menu_position' => 2,
	'menu_icon' => 'dashicons-share',
	'supports' => ['title','editor','thumbnail'],
	'rewrite' => ['slug' => 'socials'],
]);


// Get CPT
function get_socials($count, $search = null)
{
	$socials = new DW_CustomSearchQuery([
		'post_type' => 'social',
		'orderby' => 'date',
		'order' => 'ASC',
		'posts_per_page' => $count,
		's' => strlen($search) ? $search : null,
	]);

	return $socials;
}
