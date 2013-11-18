<?php
/**
 * Plugin Name: WP Auto Updates Enabler
 * Plugin URI: http://www.imadalin.ro/wordpress/plugins/wp-auto-updates-enabler/
 * Description: Enables auto update of all major and minor versions for Core, Themes and Plugins, disables Dev versions. No config, no options, just simple and fast.
 * Version: 1.0
 * Author: Madalin Ignisca
 * Author URI: http://www.imadalin.ro/
 * License: GPLv3
 */

// Turn off development versions
add_filter( 'allow_dev_auto_core_updates', '__return_false' );

// Turn on core major versions
add_filter( 'allow_major_auto_core_updates', '__return_true' );

// Turn on core minor versions
add_filter( 'allow_minor_auto_core_updates', '__return_true' );

// Turn on plugins updates
add_filter( 'auto_update_plugin', '__return_true' );

// Turn on themes updates
add_filter( 'auto_update_theme', '__return_true' );

// Turn on translations updates (this are same like core minor setting)
add_filter( 'auto_update_translation', '__return_true' );

// That's all. This makes sure all your WordPress site is updated to latest stable versions
