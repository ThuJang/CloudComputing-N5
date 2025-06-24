<?php

/**
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Newslink Magazine for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'newslink_magazine_register_required_plugins', 0);
function newslink_magazine_register_required_plugins()
{
	$plugins = array(
		array(
			'name'      => 'Superb Addons',
			'slug'      => 'superb-blocks',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'newslink-magazine',
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


function newslink_magazine_pattern_styles()
{
	wp_enqueue_style('newslink-magazine-patterns', get_template_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('newslink-magazine-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'newslink_magazine_pattern_styles');


add_theme_support('wp-block-styles');

// Removes the default wordpress patterns
add_action('init', function () {
	remove_theme_support('core-block-patterns');
});

// Register customer Newslink Magazine pattern categories
function newslink_magazine_register_block_pattern_categories()
{
	register_block_pattern_category(
		'header',
		array(
			'label'       => __('Header', 'newslink-magazine'),
			'description' => __('Header patterns', 'newslink-magazine'),
		)
	);
	register_block_pattern_category(
		'call_to_action',
		array(
			'label'       => __('Call To Action', 'newslink-magazine'),
			'description' => __('Call to action patterns', 'newslink-magazine'),
		)
	);
	register_block_pattern_category(
		'content',
		array(
			'label'       => __('Content', 'newslink-magazine'),
			'description' => __('Newslink Magazine content patterns', 'newslink-magazine'),
		)
	);
	register_block_pattern_category(
		'teams',
		array(
			'label'       => __('Teams', 'newslink-magazine'),
			'description' => __('Team patterns', 'newslink-magazine'),
		)
	);
	register_block_pattern_category(
		'banners',
		array(
			'label'       => __('Banners', 'newslink-magazine'),
			'description' => __('Banner patterns', 'newslink-magazine'),
		)
	);
	register_block_pattern_category(
		'contact',
		array(
			'label'       => __('Contact', 'newslink-magazine'),
			'description' => __('Contact patterns', 'newslink-magazine'),
		)
	);
	register_block_pattern_category(
		'layouts',
		array(
			'label'       => __('Layouts', 'newslink-magazine'),
			'description' => __('layout patterns', 'newslink-magazine'),
		)
	);
	register_block_pattern_category(
		'testimonials',
		array(
			'label'       => __('Testimonial', 'newslink-magazine'),
			'description' => __('Testimonial and review patterns', 'newslink-magazine'),
		)
	);

}

add_action('init', 'newslink_magazine_register_block_pattern_categories');





// Initialize information content
require_once trailingslashit(get_template_directory()) . 'inc/vendor/autoload.php';

use SuperbThemesThemeInformationContent\ThemeEntryPoint;
add_action("init", function () {
ThemeEntryPoint::init([
    'type' => 'block', // block / classic
    'theme_url' => 'https://superbthemes.com/newslink-magazine/',
    'demo_url' => 'https://superbthemes.com/demo/newslink-magazine/',
    'features' => array(
    	array(
    		'title' => __("Theme Designer", "newslink-magazine"),
    		'icon' => "lego-duotone.webp",
    		'description' => __("Choose from over 300 designs for footers, headers, landing pages & all other theme parts.", "newslink-magazine")
    	),
    	   	array(
    		'title' => __("Editor Enhancements", "newslink-magazine"),
    		'icon' => "1-1.png",
    		'description' => __("Enhanced editor experience, grid systems, improved block control and much more.", "newslink-magazine")
    	),
    	array(
    		'title' => __("Custom CSS", "newslink-magazine"),
    		'icon' => "2-1.png",
    		'description' => __("Add custom CSS with syntax highlight, custom display settings, and minified output.", "newslink-magazine")
    	),
    	array(
    		'title' => __("Animations", "newslink-magazine"),
    		'icon' => "wave-triangle-duotone.webp",
    		'description' => __("Animate any element on your website with one click. Choose from over 50+ animations.", "newslink-magazine")
    	),
    	array(
    		'title' => __("WooCommerce Integration", "newslink-magazine"),
    		'icon' => "shopping-cart-duotone.webp",
    		'description' => __("Choose from over 100 unique WooCommerce designs for your e-commerce store.", "newslink-magazine")
    	),
    	array(
    		'title' => __("Responsive Controls", "newslink-magazine"),
    		'icon' => "arrows-out-line-horizontal-duotone.webp",
    		'description' => __("Make any theme mobile-friendly with SuperbThemes responsive controls.", "newslink-magazine")
    	)
    )
]);
});