<?php

//LCCC Dashboard Widget

add_action('wp_dashboard_setup', 'toolbox_admin_dashboard_widgets');
 
function toolbox_admin_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('toolbox_help_widget', 'Web Site Support', 'toolbox_help_widget');

 	// Globalize the metaboxes array, this holds all the widgets for wp-admin
 
 	global $wp_meta_boxes;
 	
 	// Get the regular dashboard widgets array 
 	// (which has our new widget already but at the end)
 
 	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
 	
 	// Backup and delete our new dashboard widget from the end of the array
	
 	$wd2_widget_backup = array( 'toolbox_help_widget' => $normal_dashboard['toolbox_help_widget'] );
 	unset( $normal_dashboard['toolbox_help_widget'] );
 
 	// Merge the two arrays together so our widget is at the beginning
 
 	$sorted_dashboard = array_merge( $wd2_widget_backup, $normal_dashboard );
 
 	// Save the sorted array back into the original metaboxes 
 
 	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}

function toolbox_help_widget() {
?><h1>Welcome!</h1>
<p><strong>Need help? <br />Please contact:</strong>
<ul style="list-style: disc; margin: 0 0 0 40px;">
<li> <strong>Joe Querin</strong> at <a href="mailto:jquerin@lorainccc.edu">joecue@gmail.com</a></li>
</ul>
</p>
<p>For WordPress Tutorials visit: <a href="http://www.wpbeginner.com" target="_blank">WPBeginner</a></p>

<?php
} 

?>