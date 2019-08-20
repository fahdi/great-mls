<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://fahdmurtaza.com
 * @since             1.0.0
 * @package           Great_Lms
 *
 * @wordpress-plugin
 * Plugin Name:       Great LMS
 * Plugin URI:        http://fahdi.github.io/great-mls
 * Description:       This is my take on learning management system in wordpress.
 * Version:           1.0.0
 * Author:            Fahad Murtaza
 * Author URI:        https://fahdmurtaza.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       great-lms
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GREAT_LMS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-great-lms-activator.php
 */
function activate_great_lms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-great-lms-activator.php';
	Great_Lms_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-great-lms-deactivator.php
 */
function deactivate_great_lms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-great-lms-deactivator.php';
	Great_Lms_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_great_lms' );
register_deactivation_hook( __FILE__, 'deactivate_great_lms' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-great-lms.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_great_lms() {

	$plugin = new Great_Lms();
	$plugin->run();

}
run_great_lms();
