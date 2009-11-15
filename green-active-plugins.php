<?php
/*
Plugin Name: Green Active Plugins!
Description: Hate the colors used on the WP 2.8 admin plugins page? Love WP 2.7's color scheme? Here's your dream plugin!
Author: r-a-y
Version: 1.0
Author URI: http://buddypress.org/developers/r-a-y/
*/

function gap_active_plugin_colors() {
?>
	<style type="text/css">
	tr.active th, tr.active td {background-color:#E7F7D3 !important;}
	tr.inactive th, tr.inactive td {background-color:#fff !important;}
	.plugin-update-tr .update-message {text-align:center;}
	</style>
<?php	
}

add_action('admin_head', 'gap_active_plugin_colors');
?>
