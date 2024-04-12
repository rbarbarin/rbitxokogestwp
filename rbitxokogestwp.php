<?php

/**
* @link https://www.rbisysadmin.com/
* @since 0.0.1
* Plugin Name: RBI TxokoGest
* Plugin URI: https://www.txokogest.com/
* Description: Gestión de Txokos y asociaciones
* Version: 0.0.1
* Author: RBI
* Author URI: https://www.rbisysadmin.com/
*/

register_activation_hook(__FILE__, 'rbitxgCreateTables');

function rbitxgCreateTables() {
	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();

	$table_name = $wpdb->prefix . 'rbitxg_reservas';
	$sql = "CREATE TABLE $table_name (
	    reser_id int(20) NOT NULL AUTO_INCREMENT,
		user varchar(64) NOT NULL DEFAULT '',
		fecha datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
		turno varchar(20) NOT NULL DEFAULT '',
		element varchar(20) NOT NULL DEFAULT '',
		PRIMARY KEY (reser_id)
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
}


?>
