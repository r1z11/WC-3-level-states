<?php
/**
 * Plugin Name: WC 3 Level States
 * Plugin URI: https://github.com/r1z11/WC-3-level-states
 * Description: Add shipping zones 3 levels deep into WooCommerce
 * Version: 1.0.0
 * Author: Eric Sentongo
 * Author URI: https://profiles.wordpress.org/ericsentongo
 * Developer: ericsentongo
 * Developer URI: https://github.com/r1z11
 * Text Domain: wc-3-level-states
 * Domain Path: /languages
 *
 * Requires at least: 5.8
 * Tested up to: 6.1.1
 * Requires PHP: 7.2
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Prevent direct access to the plugin
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Import list of cities
require_once('cities.php');

add_filter('woocommerce_states', 'wc-3-level-states');

function wc_3_level_states($states)
{
    $map = array();
    // Populate states array
    global $cities;
    foreach ($cities as $city => $city_value) {
        $map[$city] = $city_value['city'] . ', ' . $city_value['town'];
    }
    // Basic structure of states array
    $states['UG'] = $map;
    print_r($states);
    return $states;
}