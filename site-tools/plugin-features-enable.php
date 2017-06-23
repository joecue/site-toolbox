<?php

/*
 * Check the plugin settings to see which features to enable
 *
 *
 */

 $webtools = get_option( 'tools_toolbox_settings' );

 // Check for Gateway Menu Feature

  // check if field is set to true or false.  Removes undefined index warning.
  $portfolio = isset($webtools['tools_enable_portfolio_posts_field']) ? $webtools['tools_enable_portfolio_posts_field'] : '';

 if ($portfolio == 1) {
  require_once( plugin_dir_path( __FILE__ ).'portfolio/portfolio-cpt.php');
  require_once( plugin_dir_path( __FILE__ ).'portfolio/portfolio-metabox.php');
 }

  require_once( plugin_dir_path( __FILE__ ).'default-features/toolbox-admin-widget.php');

?>