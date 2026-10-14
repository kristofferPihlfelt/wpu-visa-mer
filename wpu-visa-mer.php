<?php
/**
 * Plugin Name:       WPU Visa mer
 * Plugin URI:        https://wordpressutveckling.se/gutenberg-block-interactivity-api/
 * Description:       Ett hopfällbart textblock byggt med Interactivity API, utan byggsteg.
 * Version:           1.0.0
 * Requires at least: 6.5
 * Requires PHP:      8.2
 * Author:            Pihlfelt & Vänner
 * Author URI:        https://pihlfelt.se
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpu-visa-mer
 */

defined( 'ABSPATH' ) || exit;

// The block directory holds block.json, so register_block_type() reads everything from there.
add_action( 'init', 'wpu_visa_mer_register_block' );
function wpu_visa_mer_register_block() {
	register_block_type( __DIR__ . '/visa-mer' );
}
