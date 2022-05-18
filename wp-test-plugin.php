<?php
/**
* Test Plugin
*
* @package           Test Plugin
* @author            Roman Bruskevtsev
* @copyright         Test Plugin
* @license           GPL-2.0-or-later
*
* @wordpress-plugin
* Plugin Name:       Test Plugin
* Plugin URI:        https://github.com/romanbruskevtsev/wp-test-plugin
* Description:       Simple WP Test Plugin
* Version:           1.0.2
* Requires at least: 5.2
* Requires PHP:      7.3
* Author:            Roman Bruskevtsev
* Author URI:        https://www.three-ships.com/
* Text Domain:       wp-test
* License:           GPL v2 or later
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit();
}

if ( ! defined( 'TEST_PLUGIN_POST_FILE' ) ) {
    define( 'TEST_PLUGIN_POST_FILE', __FILE__ );
}

if ( ! defined( 'TEST_PLUGIN_PATH' ) ) {
    define( 'TEST_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

require_once TEST_PLUGIN_PATH . 'test-plugin-updater.php';

$updater = new WP_Test_Plugin_Updater( __FILE__ );

$updater->set_username( 'romanbruskevtsev' );
$updater->set_repository( 'wp-test-plugin' );
$updater->initialize();