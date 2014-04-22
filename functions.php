<?php
/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function email_blast_dashboard_widget() {

	wp_add_dashboard_widget(
                 'email_blast_dashboard_widget',         // Widget slug.
                 'Email Blast',        			 // Title.
                 'email_blast_dashboard_widget_function' // Display function.
        );	
}
add_action( 'wp_dashboard_setup', 'email_blast_dashboard_widget' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function email_blast_dashboard_widget_function() {

	// Display whatever it is you want to show.
	
	include 'email_blast.php';

	
	email_blast_query();


	
} 

?>