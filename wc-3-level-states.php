<?php
/**
 * Plugin Name: WC 3 Level States
 * Plugin URI: https://github.com/
 * Description: Add shipping zones 3 levels deep into WooCommerce
 * Version: 1.0.0
 * Author: Eric Sentongo
 * Author URI: https://github.com/
 * Developer: ericsentongo
 * Developer URI: https://profiles.wordpress.org
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
define('ABSPATH') or die;

add_filter('woocommerce_states', 'wc-3-level-states');

function wc_3_level_states($states)
{
    $map = array();
    // Basic structure of cities array
    $cities = array(
        'id' => array(
            'city' => 'city name',
            'division' => 'division name'
        )
    );
    // Populate states array
    foreach ($cities as $city => $city_value) {
        $map[$city] = $city_value['city'] . ', ' . $city_value['division'];
    }
    // Basic structure of states array
    $states['UG'] = $map;
    return $states;
}