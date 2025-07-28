<?php
/**
 * Plugin Name: AW Subscription Total Rule
 * Description: Adds an AutomateWoo rule to compare a subscription's total.
 * Version: 1.0.0
 * Author: Raif Deari
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: aw-subscription-total-rule
 * Requires at least: 6.0
 * Tested up to: 6.8.1
 * Requires PHP: 7.4
 * WC requires at least: 9.0
 * WC tested up to: 10.0
 */

// Prevent direct access to the file.
defined( 'ABSPATH' ) || exit;

/**
 * Register the custom AutomateWoo rule by mapping a rule key to the file path.
 *
 * This uses AutomateWoo's recommended filter: 'automatewoo/rules/includes'.
 * The rule file must return an instance of a class that extends AutomateWoo\Rules\Rule.
 */

add_filter( 'automatewoo/rules/includes', function ( $rules ) {
	$rules['subscription_total'] = __DIR__ . '/rules/rule-subscription-total.php';
	return $rules;
} );

/**
 * Declare compatibility with WooCommerce High-Performance Order Storage (HPOS).
 *
 * This ensures the plugin will function properly when HPOS is enabled.
 */

add_action( 'before_woocommerce_init', function () {
	if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
		\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility(
			'custom_order_tables',
			__FILE__,
			true
		);
	}
} );
