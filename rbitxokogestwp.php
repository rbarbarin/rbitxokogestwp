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

defined( 'ABSPATH' ) or die( 'Nope, not accessing this' );

/**
 * The code that runs during plugin activation.
 */
function activate_rbitxg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/rbitxg_activate.php';
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_rbitxg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/rbitxg_deactivate.php';
}

register_activation_hook( __FILE__, 'activate_rbitxg' );
register_deactivation_hook( __FILE__, 'deactivate_rbitxg' );


/**
 * Add menu for admin 
 */
 
if (is_admin()) {
	require_once plugin_dir_path( __FILE__ ) . 'admin/rbitxgadm.php';
  }


  // Call shortcodes
  require_once plugin_dir_path( __FILE__ ) . 'includes/rbitxg_shortcode.php';
  
  // Call widgets
  require_once plugin_dir_path( __FILE__ ) . 'includes/rbitxg_widget.php';


?>
