<?php
require_once(__DIR__ . '/acf.php');
require_once(__DIR__ . '/CustomSearchQuery.php');

// Add action and filter
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

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );
function fix_svg() {
	echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


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
function portfolio_get_projects($count, $search = null): DW_CustomSearchQuery {
	return new DW_CustomSearchQuery([
		'post_type' => 'projets',
		'orderby' => 'date',
		'order' => 'ASC',
		'posts_per_page' => $count,
		's' => strlen($search) ? $search : null,
	]);
}
function portfolio_get_socials($count, $search = null): DW_CustomSearchQuery {
	return new DW_CustomSearchQuery([
		'post_type' => 'socials',
		'orderby' => 'date',
		'order' => 'ASC',
		'posts_per_page' => $count,
		's' => strlen($search) ? $search : null,
	]);
}

// Restreindre la requête de recherche "par défaut"
function dw_restrict_search_query($query) {
	if ($query->is_search && ! is_admin() && ! is_a($query, DW_CustomSearchQuery::class)) {
		$query->set('post_type', ['post']);
	}
	return $query;
}
add_filter('pre_get_posts','dw_restrict_search_query');


// Fonction permettant d'inclure des "partials" dans la vue et d'y injecter des variables "locales" (uniquement disponibles dans le scope de l'inclusion).
function dw_include(string $partial, array $variables = [])
{
	extract($variables);
	include(__DIR__ . '/assets/partials/' . $partial . '.php');
}
