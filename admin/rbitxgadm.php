<?php

/**
* @link https://www.rbisysadmin.com/
* @since 0.0.1
* Plugin Name: RBI TxokoGest
* Plugin URI: https://www.txokogest.com/
* Description: Gestión de Txokos y asociaciones
* Version: 0.0.1
* Author: RBI
*/

// admin page

add_action('admin_init', 'rbitxg_display_options');
add_action('admin_menu', 'rbitxg_cp_AdminMenu');
function rbitxg_cp_AdminMenu(){
add_menu_page( __('RBI TxokoGest', 'rbitxgtest1'), __('RBI TxokoGest', 'rbitxgtest1'), 'manage_options', 'rbitxgtest1', 'rbitxgOptionsPage' );
}
function rbitxgOptionsPage() {
?> <form action="options.php" method="post"> <?php
settings_fields('plugin_rbi_Page');
do_settings_sections('plugin_rbi_Page');
submit_button(); ?>
</form><?php
}

function rbitxg_display_options(){

register_setting('plugin_rbi_Page', 'rbitxgtest1_options', 'callbackValidation');

add_settings_section(
'rbitxg_pluginPage_section',
__('rbitxg Backend Options', 'rbitxgtest1'),
'rbitxgSettingsSectionCallback',
'plugin_rbi_Page'
);
add_settings_field(
'rbitxg_checkbox_field_1',
esc_attr__('Titulo', 'rbitxgtest1'),
'rbitxgCheckboxRender_1',
'plugin_rbi_Page',
'rbitxg_pluginPage_section'
);
add_settings_field(
'rbitxg_checkbox_field_2',
esc_attr__('Cantidad', 'rbitxgtest1'),
'rbitxgCheckboxRender_2',
'plugin_rbi_Page',
'rbitxg_pluginPage_section'
);
add_settings_field(
'rbitxg_checkbox_field_3',
esc_attr__('SKU', 'rbitxgtest1'),
'rbitxgCheckboxRender_3',
'plugin_rbi_Page',
'rbitxg_pluginPage_section'
);
add_settings_field(
'rbitxg_checkbox_field_4',
esc_attr__('Meta', 'rbitxgtest1'),
'rbitxgCheckboxRender_4',
'plugin_rbi_Page',
'rbitxg_pluginPage_section'
);
add_settings_field(
'rbitxg_checkbox_field_5',
esc_attr__('Descripción', 'rbitxgtest1'),
'rbitxgCheckboxRender_5',
'plugin_rbi_Page',
'rbitxg_pluginPage_section'
);
add_settings_field(
'rbitxg_checkbox_field_6',
esc_attr__('Precio', 'rbitxgtest1'),
'rbitxgCheckboxRender_6',
'plugin_rbi_Page',
'rbitxg_pluginPage_section'
);
}

function rbitxgSettingsSectionCallback(){
echo wp_kses_post('Página de configuración para RBI Txoko Gest ');
}

function rbitxgCheckboxRender_1(){
$options = get_option('rbitxgtest1_options');
?>
<input name="rbitxgtest1_options[rbitxg_checkbox_field_1]" type="checkbox" value = "1" />
<?php }

function rbitxgCheckboxRender_2(){
$options = get_option('rbitxgtest1_options');
?>
<input name="rbitxgtest1_options[rbitxg_checkbox_field_2]" type="checkbox" value = "1" />
<?php }

function rbitxgCheckboxRender_3(){
$options = get_option('rbitxgtest1_options');
?>
<input name="rbitxgtest1_options[rbitxg_checkbox_field_3]" type="checkbox" value = "1" />
<?php }

function rbitxgCheckboxRender_4(){
$options = get_option('rbitxgtest1_options');
?>
<input name="rbitxgtest1_options[rbitxg_checkbox_field_4]" type="checkbox" value = "1" />
<?php }

function rbitxgCheckboxRender_5(){
$options = get_option('rbitxgtest1_options');
?>
<input name="rbitxgtest1_options[rbitxg_checkbox_field_5]" type="checkbox" value = "1" />
<?php }

function rbitxgCheckboxRender_6(){
$options = get_option('rbitxgtest1_options');
?>
<input name="rbitxgtest1_options[rbitxg_checkbox_field_6]" type="checkbox" value = "1" />
<?php } ?>
