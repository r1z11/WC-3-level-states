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
        'UG-KLA-01' => array(
            'city' => 'Kyebando',
            'division' => 'division name'
        ),
        'UG-KLA-02' => array(
            'city' => 'Nansana',
            'division' => 'division name'
        ),
        'UG-KLA-03' => array(
            'city' => 'Kagoma',
            'division' => 'division name'
        ),
        'UG-KLA-04' => array(
            'city' => 'kawempe',
            'division' => 'division name'
        ),
        'UG-KLA-05' => array(
            'city' => 'Nabweru',
            'division' => 'division name'
        ),
        'UG-KLA-06' => array(
            'city' => 'Mpererwe',
            'division' => 'division name'
        ),
        'UG-KLA-07' => array(
            'city' => 'Bulambiro',
            'division' => 'division name'
        ),
        'UG-KLA-08' => array(
            'city' => 'Kulambiro',
            'division' => 'division name'
        ),
        'UG-KLA-09' => array(
            'city' => 'Buye',
            'division' => 'division name'
        ),
        'UG-KLA-10' => array(
            'city' => 'Najjera',
            'division' => 'division name'
        ),
        'UG-KLA-11' => array(
            'city' => 'Kitezi',
            'division' => 'division name'
        ),
        'UG-KLA-12' => array(
            'city' => 'Mbuya',
            'division' => 'division name'
        ),
        'UG-KLA-13' => array(
            'city' => 'Rubaga',
            'division' => 'division name'
        ),
        'UG-KLA-14' => array(
            'city' => 'Buwate',
            'division' => 'division name'
        ),
        'UG-KLA-15' => array(
            'city' => 'Kira',
            'division' => 'division name'
        ),
        'UG-KLA-16' => array(
            'city' => 'Bulindo',
            'division' => 'division name'
        ),
        'UG-KLA-17' => array(
            'city' => 'Nsasa',
            'division' => 'division name'
        ),
        'UG-KLA-18' => array(
            'city' => 'Namugongo',
            'division' => 'division name'
        ),
        'UG-KLA-19' => array(
            'city' => 'Bweyogerere',
            'division' => 'division name'
        ),
        'UG-KLA-20' => array(
            'city' => 'Kireka',
            'division' => 'division name'
        ),
        'UG-KLA-21' => array(
            'city' => 'Kamuli',
            'division' => 'division name'
        ),
        'UG-KLA-22' => array(
            'city' => 'Kyambogo',
            'division' => 'division name'
        ),
        'UG-KLA-23' => array(
            'city' => 'Nakawa',
            'division' => 'division name'
        ),
        'UG-KLA-24' => array(
            'city' => 'Namanve',
            'division' => 'division name'
        ),
        'UG-KLA-25' => array(
            'city' => 'Kirinya',
            'division' => 'division name'
        ),
        'UG-KLA-26' => array(
            'city' => 'Namugoona',
            'division' => 'division name'
        ),
        'UG-KLA-27' => array(
            'city' => 'Nakasero',
            'division' => 'division name'
        ),
        'UG-KLA-28' => array(
            'city' => 'Lugogo',
            'division' => 'division name'
        ),
        'UG-KLA-29' => array(
            'city' => 'Kasubi',
            'division' => 'division name'
        ),
        'UG-KLA-30' => array(
            'city' => 'Kitintale',
            'division' => 'division name'
        ),
        'UG-KLA-31' => array(
            'city' => 'Muyenga',
            'division' => 'division name'
        ),
        'UG-KLA-32' => array(
            'city' => 'Port Bell',
            'division' => 'division name'
        ),
        'UG-KLA-33' => array(
            'city' => 'Nsambya',
            'division' => 'division name'
        ),
        'UG-KLA-34' => array(
            'city' => 'Ggaba',
            'division' => 'division name'
        ),
        'UG-KLA-35' => array(
            'city' => 'Lukuli',
            'division' => 'division name'
        ),
        'UG-KLA-36' => array(
            'city' => 'Masajja',
            'division' => 'division name'
        ),
        'UG-KLA-37' => array(
            'city' => 'Munyonyo',
            'division' => 'division name'
        ),
        'UG-KLA-38' => array(
            'city' => 'Busabala',
            'division' => 'division name'
        ),
        'UG-KLA-39' => array(
            'city' => 'Namasuba',
            'division' => 'division name'
        ),
        'UG-KLA-40' => array(
            'city' => 'Bunamwaya',
            'division' => 'division name'
        ),
        'UG-KLA-41' => array(
            'city' => 'Mutungo',
            'division' => 'division name'
        ),
        'UG-KLA-42' => array(
            'city' => 'Nalukolongo',
            'division' => 'division name'
        ),
        'UG-KLA-43' => array(
            'city' => 'Kibuli',
            'division' => 'division name'
        ),
        'UG-KLA-144' => array(
            'city' => 'Bulwa',
            'division' => 'division name'
        ),
        'UG-KLA-45' => array(
            'city' => 'Lungujja',
            'division' => 'division name'
        ),
        'UG-KLA-46' => array(
            'city' => 'Mutundwe',
            'division' => 'division name'
        ),
        'UG-KLA-47' => array(
            'city' => 'Bukwenda',
            'division' => 'division name'
        ),
        'UG-KLA-48' => array(
            'city' => 'Busawula',
            'division' => 'division name'
        ),
        'UG-KLA-49' => array(
            'city' => 'Katale',
            'division' => 'division name'
        ),
        'UG-KLA-50' => array(
            'city' => 'Seguku',
            'division' => 'division name'
        ),
        'UG-KLA-51' => array(
            'city' => 'Zana',
            'division' => 'division name'
        ),
        'UG-KLA-52' => array(
            'city' => 'Luzira',
            'division' => 'division name'
        ),
        'UG-KLA-53' => array(
            'city' => 'Mengo',
            'division' => 'division name'
        ),
        'UG-KLA-54' => array(
            'city' => 'Mpanga',
            'division' => 'division name'
        ),
        'UG-KLA-55' => array(
            'city' => 'Mulago',
            'division' => 'division name'
        ),
        'UG-KLA-56' => array(
            'city' => 'namirembe',
            'division' => 'division name'
        ),
    );
    // Populate states array
    foreach ($cities as $city => $city_value) {
        $map[$city] = $city_value['city'] . ', ' . $city_value['division'];
    }
    // Basic structure of states array
    $states['UG'] = $map;
    return $states;
}