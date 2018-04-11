<!--deleteRecord.php
Input functions used to allow for new records
Authors:  Daniel Gisolfi
Version 1.0 -->

<?php
require('connect_db.php');

function delete_quote_record($q_id, $dbc){
    $query = "DELETE FROM Quotes WHERE q_id = '" . $q_id . "'";
    $result = mysqli_query($dbc, $query);
    check_results($result);

}
