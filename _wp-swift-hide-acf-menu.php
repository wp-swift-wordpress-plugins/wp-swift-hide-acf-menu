<?php
/*
Plugin Name: WP Swift: Hide the ACF menu
Plugin URI: 
Description: It may be beneficial to hide the Advanced Custom Fields menu item. This will prevent your client from changing / deleting fields.
Version: 1
Author: Gary Swift
Author URI: https://github.com/wp-swift-wordpress-plugins
License: GPL2
*/
add_filter('acf/settings/show_admin', '__return_false');
