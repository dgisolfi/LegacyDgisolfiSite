<!--inputRecord.php
Input functions used to allow for new records
Authors:  Daniel Gisolfi
Version 1.0 -->

<?php

require('connect_db.php');

# Inserts new quote record into the database
function insert_quote_record($dbc) {
	$author = $_POST['author'];
	$quote =  $_POST['quote'];
	$q_date = $_POST['q_date'];
	$q_descr = $_POST['q_descr'];

	if($q_descr == null){
		$q_descr = "n/a";

}

	$query = "INSERT INTO quotes(author, quote, q_date, q_descr) VALUES('" . $author . "','" . $quote . "','" . $q_date . "','" . $q_descr . "')";
	$result = mysqli_query($dbc, $query);
	check_results($result);
	//alert user
	// echo '<div id="entryform"><h2>Quote Added!</h2></div>';


	// email();

	//reset all vals to reset for new input
	$_POST['author'] = null;
	$_POST['quote'] = null;
	$_POST['q_date'] = null;
	$_POST['q_descr'] = null;

}


//function backupData (){
	// if ((int strlen ( string $string ) >= 69){
  //
	// }
//
//}
?>
