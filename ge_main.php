<?php
/**
 * Grossly-Endearing-Utils
 *
 * @package           Grossly-Endearing
 * @author            Steven Boyd
 * @copyright         2022 Steven Boyd Freelancer
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Grossly-Endearing-Utils
 * Plugin URI:        https://github.com/pressingbuttons/grossly-endearing-utils
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Your Name
 * Author URI:        https://example.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define('GROSSLY_ENDEARING_VERSION', '0.1');
define ('GROSSLY_ENDEARING_DIR', plugin_dir_path( __FILE__ ));

 ?>