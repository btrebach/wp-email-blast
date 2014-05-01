<?php
/*
 *  This functoin runs the query on the directory db and poplates the widget with email addresses.
 */
function email_blast_query(){
global $wpdb;
$business_directory_array = $wpdb->get_results( 		// Runs the query
"SELECT GROUP_CONCAT(pe.meta_value) 'Email'
FROM wp_postmeta pe
WHERE pe.meta_key = '_wpbdp[fields][8]'"
);

$email_array = $business_directory_array[0]->Email; 	// Dereferences the string of emails. 

$emails = explode("," , $email_array);					// Makes array of email addresses

$count = 0;
foreach ($emails as $row) {								// Prints array into widget
	echo $row;
	$count = $count+1;
	if($count < count($emails)){
		echo ", ";
	}
}
$count = 0;

}
?>