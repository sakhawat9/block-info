<?php
/**
 * Plugin Name:       BlockInfo
 * Description:       Block for showing info.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Fixolab
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       blockinfo
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_info_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_info_init' );


add_theme_support("editor-styles");
add_editor_style("style-editor.css");

add_theme_support("responsive-embeds");

add_theme_support("align-wide");

add_theme_support( "editor-color-palette", array(
	array(
		'name' => esc_attr__( 'info magenta', 'themeLangDomain'), 'slug' => 'info-magenta', 'color' => '#a156b4'
	),
	array(
		'name' => esc_attr__( 'info blue', 'themeLangDomain'), 'slug' => 'info-blue', 'color' => '#3182ce'
	),
	array(
		'name' => esc_attr__( 'info pink', 'themeLangDomain'), 'slug' => 'info-pink', 'color' => '#d53f8c'
	),
	array(
		'name' => esc_attr__( 'info gray', 'themeLangDomain'), 'slug' => 'info-gray', 'color' => '#1a202c'
	),
	array(
		'name' => esc_attr__( 'info orange', 'themeLangDomain'), 'slug' => 'info-orange', 'color' => '#ed8936'
	),
	array(
		'name' => esc_attr__( 'info white', 'themeLangDomain'), 'slug' => 'info-white', 'color' => '#fff'
	),
));


// add_theme_support( "disable-custom-colors" );

add_theme_support( "editor-gradient-presets", array(
	array(
		'name' => esc_attr__( 'Red to Blue', 'themeLangDomain'),
		'gradient' => 'linear-gradient(135deg, #e4064d 0%, #2c59ee 100%)', 'slug' => 'red-to-blue'
	),
	array(
		'name' => esc_attr__( 'Green to Yellow', 'themeLangDomain'),
		'gradient' => 'linear-gradient(135deg, #3ce406 0%, #d6e029 100%)', 'slug' => 'green-to-yellow'
	),
	array(
		'name' => esc_attr__( 'Green to Blue', 'themeLangDomain'),
		'gradient' => 'linear-gradient(135deg, #3ce406 0%, #3182ce 100%)', 'slug' => 'green-to-blue'
	),
	array(
		'name' => esc_attr__( 'Orange to Pink', 'themeLangDomain'),
		'gradient' => 'linear-gradient(135deg, #ed8936 0%, #d53f8c 100%)', 'slug' => 'orange-to-pink'
	),
));


add_theme_support('editor-font-sizes', array(
	array(
		'name' => esc_attr__('Small', 'themeLangDomain'),
		'size' => 12,
		'slug' => 'small '
	),
	array(
		'name' => esc_attr__('Regular', 'themeLangDomain'),
		'size' => 16,
		'slug' => 'regular'
	),
	array(
		'name' => esc_attr__('Large', 'themeLangDomain'),
		'size' => 36,
		'slug' => 'large'
	),
));

add_theme_support('custom-font-sizes');

add_theme_support('custom-line-height');

add_theme_support('custom-spacing');

add_theme_support('custom-units', 'px', 'rem', 'em');

