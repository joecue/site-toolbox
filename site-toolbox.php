<?php
/*
Plugin Name: Site Toolbox
Description: Site specific code changes and modifications
*/
/* Start Adding Functions Below this Line */

/* Enqueue Public CSS */

function site_toolbox_styles() {
 wp_enqueue_style('toolbox_styles', plugin_dir_url( __FILE__ ) . 'css/badges.css', 20);
}
add_action( 'wp_enqueue_scripts', 'site_toolbox_styles' );

/* Enqueue Admin CSS */

function site_toolbox_wp_admin_scripts() {
 wp_enqueue_style('toolbox_admin_styles', plugin_dir_url( __FILE__ ) . 'css/lc_webtools_styles.css', 20);

}
add_action( 'admin_enqueue_scripts', 'lorainccc_site_features_wp_admin_scripts' );

/* Tool Options */
require_once( plugin_dir_path( __FILE__ ).'site-tools/plugin-options.php');

/* Check to see which tools have selected */
require_once( plugin_dir_path( __FILE__ ).'site-tools/plugin-features-enable.php');


/* Stop Adding Functions Below this Line */
?>