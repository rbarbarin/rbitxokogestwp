<?php

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
// borrar opciones del plugin
$option_name = 'rbitxgtest1_options';

delete_option($option_name);

// para opciones de sitio en Multisitio
delete_site_option($option_name);