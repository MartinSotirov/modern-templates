<?php
/**
 * Plugin Name: Modern Templates
 * Plugin URI:
 * Description: Testing some templating stuff
 * Version:     0.1
 * Author:      Martin Sotirov
 * Author URI:  http://evil.ninja
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

require __DIR__ . '/vendor/autoload.php';

global $WPMT;
$WPMT = WPMT\Plugin::getInstance();
