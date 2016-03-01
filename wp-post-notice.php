<?php

/**
 * Plugin Name: WP Post Notice
 * Plugin URI: http://simpletechlife.in
 * Description: Display short notice above post content
 * Author: Praveen Selvasekaran
 * Version: 0.1.0
 * Author URI: http://simpletechlife.in
 * License: GPL-3.0+
 */



//Check if the file is accessed directly

if ( ! defined( 'WPINC' )) {
    die;
}

require_once ( plugin_dir_path( __FILE__) . 'class-wp-post-notice.php' );