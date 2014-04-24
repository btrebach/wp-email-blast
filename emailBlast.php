<?php

function email_blast_query(){
global $wpdb;
$business_directory_array = $wpdb->get_results(
"SELECT GROUP_CONCAT(pe.meta_value) 'Email'
FROM wp_postmeta pe
WHERE pe.meta_key = '_wpbdp[fields][8]'"
);

$email_array = $business_directory_array[0]->Email;

$emails = explode("," , $email_array);

$count = 0;
foreach ($emails as $row) {
	echo $row;
	$count = $count+1;
	if($count < count($emails)){
		echo ", ";
	}
}
$count = 0;

}
?>