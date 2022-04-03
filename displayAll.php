<!-- (25) From the database that was built, create a display API. This API is supposed to return a JSON object with all information from all offers from the agency. A single PHP file displayAll.php is necessary for this task. There should be a link in the home page that would lead to the API. Please note that the data from the database must be converted to a JSON type which is raw data, therefore no formatting is required.  -->

<?php
require_once "actions/db_connect.php";
require_once "convertJSON.php";

//Checks if GET Method was used 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = "SELECT * FROM travel_offers";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($connect);

    if (count($row) == 0) {
        response(200, "No Data found", $row);
    } else {
        response(200, "Data Found", $row);
    }
} else {
    response(400, "Invalid Request", null);
}

?>