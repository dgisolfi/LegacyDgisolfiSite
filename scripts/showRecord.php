<!--ShowRecords.php
Function to display all quotes
Author: Daniel Gisolfi
Version 1.0 -->
<?php
require('../scripts/helperFunctions.php');

# Shows quotes records
function show_quote_records($dbc) {
	# Create database query for specified table
	$query = "SELECT * FROM quotes ORDER BY q_id DESC";

	# Execute the query
	$results = mysqli_query($dbc, $query);
	check_results($results);
	
	# Show results
	if($results){

  		# Generate a table row for each row result
  		while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

		echo '<li>';
		echo '<div class="card">';
		echo '<div class="card-content">';
		echo '<form method="POST">';
		echo '<div id="btn-wrapper"><input type="submit" class="delete" name="btnDelete" value="×"></div>';
		echo '<input type=hidden value='. $row['q_id'] .' name=submit_btn_id >';
		echo '</form>';
      	echo '<h2 class="card-author">' . $row['author'] . '</h2>';
      	echo '<p>' . $row['quote'] . '<p>';
				echo '<p>' . $row['q_date'] . '</p>';
				if(!($row['q_descr'] == "n/a")){
					echo '<p>' . $row['q_descr'] . '<p>';
				}
		echo '	</div>';
		echo ' </div>';
		echo '</li>';

		}

	}
  		# Free up the results in memory
  		mysqli_free_result($results);
}

?>
