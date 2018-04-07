<!--ShowRecords.php
Function to display all quotes
Author: Daniel Gisolfi
Version 1.0 -->
<?php
require('scripts/helperFunctions.php');

# Shows quotes records
function show_quote_records($dbc) {
	# Create database query for specified table
	$query = "SELECT * FROM quotes";

	# Execute the query
	$results = mysqli_query($dbc, $query);
	check_results($results);

	# Show results
	if($results){
  		# Generate a table row for each row result
  		while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {

      	echo '<h2>' . $row['author'] . '</h2>';
      	echo '<h3>' . $row['quote'] . '<h3>';
				echo '<h4>' . $row['q_date'] . '</h4>';
				if(!($row['q_descr'] == "n/a")){
					echo '<p>' . $row['q_descr'] . '</p>';
				}
		}

	}
  		# Free up the results in memory
  		mysqli_free_result($results);
}

?>
