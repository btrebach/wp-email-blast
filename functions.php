<?php
/**
 * This function creates the widget on the dashboard to be populated with emails. 
 */
function email_blast_dashboard_widget() {

	wp_add_dashboard_widget(
                 'email_blast_dashboard_widget',         // Widget slug.
                 'Email Blast',        			 		 // Title.
                 'email_blast_dashboard_widget_function' // Display function.
        );	
}
add_action( 'wp_dashboard_setup', 'email_blast_dashboard_widget' );


//This function runs the query function.
function email_blast_dashboard_widget_function() {

	//rund the function to get and print the emails.
	
	include 'email_blast.php';
	email_blast_query(); 


	
} 

?>

