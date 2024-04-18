<?php
defined( 'ABSPATH' ) or die( 'Nope, not accessing this' );

// register_activation_hook(__FILE__, 'rbitxgCreateTables');

function rbitxgCreateTables() {
	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();

	$table_name = $wpdb->prefix . 'rbitxg_bookings';
	$sql = "CREATE TABLE $table_name (
	    booking_id int(20) NOT NULL AUTO_INCREMENT,
		user varchar(64) NOT NULL DEFAULT '',
		date datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
		shift varchar(20) NOT NULL DEFAULT '',
		element varchar(20) NOT NULL DEFAULT '',
		PRIMARY KEY (booking_id)
	    ) $charset_collate;
		";
	if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
	}

	$table_name = $wpdb->prefix . 'rbitxg_element';
	$sql = "CREATE TABLE $table_name (
	    element_id int(20) NOT NULL AUTO_INCREMENT,
		name varchar(64) NOT NULL DEFAULT '',
		description varchar(200) NOT NULL DEFAULT '',
		PRIMARY KEY (element_id)
	    ) $charset_collate;
		";
	if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
	}

	$table_name = $wpdb->prefix . 'rbitxg_shifts';
	$sql = "CREATE TABLE $table_name (
	    shift_id int(20) NOT NULL AUTO_INCREMENT,
		name varchar(64) NOT NULL DEFAULT '',
		description varchar(200) NOT NULL DEFAULT '',
		PRIMARY KEY (shift_id)
	    ) $charset_collate;
		";
	if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
	}
}

rbitxgCreateTables();

?>