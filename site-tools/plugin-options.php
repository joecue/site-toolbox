<?php

/*
 * Based upon code from
 * https://developer.wordpress.org/plugins/settings/custom-settings-page/
 *
 */

function tools_add_wp_webtools_menu_page() {
 add_menu_page(
  __( 'Site Toolbox', 'toolbox' ),                                   // Page Title
  'Site Toolbox',                                                    // Menu Title
  'manage_options',                                                  // Capabilities
  'tools-wp-tools',                                                  // Menu Slug
  'tools_wp_toolbox_options_page',                                   // Function
  plugins_url( 'site-toolbox/assets/images/toolbox-icon.png' ),      // Icon URL
  2                                                                  // Position (2 = Dashboard)
 );
}

add_action( 'admin_menu', 'tools_add_wp_toolbox_menu_page' );
add_action( 'admin_init', 'tools_settings_init' );

function tools_settings_init(){
 
  register_setting( 'tools_wp_toolbox_options', 'tools_toolbox_settings' );

  add_settings_section(
   'tools_toolbox_settings_section',
   __( 'Choose Features to Enable', 'toolbox' ),
   'tools_toolbox_settings_section_callback',
   'tools_toolbox_options'
  );
 
  add_settings_field(
   'tools_enable_portfolio_posts_field',                                      // Field ID
   __('Enable Portfolio Post Types:' , 'toolbox'),                            // Title
   'tools_portfolio_post_render',                                             // Callback
   'tools_wp_toolbox_options',                                                  // Page
   'tools_toolbox_settings_section'                                             // Section
  );
 
}

function tools_wp_toolbox_options_page(){
 ?>

 <h1 style="padding: 20px 0 0 0;">Site Toolbox Menu</h1>
<form method="post" action="options.php">
  <?php
   settings_fields( 'lc_wp_webtools_options' );
   do_settings_sections( 'lc_wp_webtools_options' );
   submit_button();
  ?>
  </form>
<?php
 
}

function tools_toolbox_settings_section_callback(){
 echo __( 'Available Tools', 'toolbox' ); 
}

function tools_portfolio_post_render(){
  $options = get_option( 'tools_toolbox_settings' );
  $portfolio = isset($options['tools_enable_portfolio_posts_field']) ? $options['tools_enable_portfolio_posts_field'] : '';
?>

 <label class="switch">
  <input type="checkbox" name='lc_webtools_settings[tools_enable_portfolio_posts_field]' <?php checked( $portfolio, 1); ?> value='1' style="display:none;">
  <div class="slider round"></div>
 </label>
 <p class="description" id="tagline-description">Provides a custom fields and post type to display portfolio work.</p>
  <?php
}

?>