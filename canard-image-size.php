<?php
/**
 * Plugin Name: Canard Image Size
 * Description: Changes size of featured image in WordPress theme Canard
 * Plugin URI: https://github.de/pixolin/canard-image-size
 * Author: Pixolin
 * Author URI: https://pixolin.de
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) or exit;

add_action( 'after_setup_theme', 'canard_image_size', 11 );
function canard_image_size() {
	add_image_size( 'canard-single-thumbnail', 1920, 300, true );
}
