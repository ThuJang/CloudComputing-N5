<?php

/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Newspaper Express for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'newspaper_express_register_required_plugins', 0);
function newspaper_express_register_required_plugins()
{
	$plugins = array(
		array(
			'name'      => 'Superb Addons',
			'slug'      => 'superb-blocks',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'newspaper-express',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa($plugins, $config);
}


function newspaper_express_pattern_styles()
{
	wp_enqueue_style('newspaper-express-patterns', get_stylesheet_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('newspaper-express-editor', get_stylesheet_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'newspaper_express_pattern_styles');
function newspaper_express_block_editor() {
    add_editor_style( '/assets/css/block-editor.css' );
		add_editor_style( get_stylesheet_directory_uri() . '/assets/css/block-editor.css' );

}
add_action( 'admin_init', 'newspaper_express_block_editor' );


add_theme_support('wp-block-styles');

// Removes the default wordpress patterns
add_action('init', function () {
	remove_theme_support('core-block-patterns');
});

// Register customer Newspaper Express pattern categories
function newspaper_express_register_block_pattern_categories()
{
	register_block_pattern_category(
		'header',
		array(
			'label'       => __('Header', 'newspaper-express'),
			'description' => __('Header patterns', 'newspaper-express'),
		)
	);
	register_block_pattern_category(
		'call_to_action',
		array(
			'label'       => __('Call To Action', 'newspaper-express'),
			'description' => __('Call to action patterns', 'newspaper-express'),
		)
	);
	register_block_pattern_category(
		'content',
		array(
			'label'       => __('Content', 'newspaper-express'),
			'description' => __('Newspaper Express content patterns', 'newspaper-express'),
		)
	);
	register_block_pattern_category(
		'teams',
		array(
			'label'       => __('Teams', 'newspaper-express'),
			'description' => __('Team patterns', 'newspaper-express'),
		)
	);
	register_block_pattern_category(
		'banners',
		array(
			'label'       => __('Banners', 'newspaper-express'),
			'description' => __('Banner patterns', 'newspaper-express'),
		)
	);
	register_block_pattern_category(
		'contact',
		array(
			'label'       => __('Contact', 'newspaper-express'),
			'description' => __('Contact patterns', 'newspaper-express'),
		)
	);
	register_block_pattern_category(
		'layouts',
		array(
			'label'       => __('Layouts', 'newspaper-express'),
			'description' => __('layout patterns', 'newspaper-express'),
		)
	);
	register_block_pattern_category(
		'testimonials',
		array(
			'label'       => __('Testimonial', 'newspaper-express'),
			'description' => __('Testimonial and review patterns', 'newspaper-express'),
		)
	);

}

add_action('init', 'newspaper_express_register_block_pattern_categories');
