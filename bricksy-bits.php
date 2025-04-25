<?php
/*
Plugin Name: Bricksy Bits
Description: Bricksy Bits is a lightweight add-on that brings essential missing features to Bricks Builder — crafted for performance, usability, and a better developer experience.
Version: 1.0.0
Requires PHP: 7.4
Author: PHP-Press
Author URI: http://php-press.com/
License: GPLv2 or later
*/

if ( ! function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

require __DIR__ . '/vendor/autoload.php';

( new PHPPress\BricksyBits\PluginSetup() )->init();
