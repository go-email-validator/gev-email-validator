<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://rapidapi.com/maranqz/api/email-validator15
 * @since             1.0.0
 * @package           Email_Validator
 *
 * @wordpress-plugin
 * Plugin Name:       GEV Email Validator
 * Description:       The Cheapest advanced Email Address Validation to forms. Prevents typos in email address field and eliminates spam submissions with fake email addresses. The solution is based on <a href="https://rapidapi.com/maranqz/api/email-validator15" target="_blank">Email Validator</a> service.
 * Version:           1.0.0
 * Author:            maranqz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
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
define( 'GEV_EMAIL_VALIDATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-email-validator-activator.php
 */
function gev_activate_email_validator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-email-validator-activator.php';
	Email_Validator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-email-validator-deactivator.php
 */
function gev_deactivate_email_validator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-email-validator-deactivator.php';
	Email_Validator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'gev_activate_email_validator');
register_deactivation_hook( __FILE__, 'gev_deactivate_email_validator');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-email-validator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function gev_run_email_validator() {

	$plugin = new GEV_Email_Validator();
	$plugin->run();

}
gev_run_email_validator();
