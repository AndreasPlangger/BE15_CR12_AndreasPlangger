<!-- (25) From the database that was built, create a display API. This API is supposed to return a JSON object with all information from all offers from the agency. A single PHP file displayAll.php is necessary for this task. There should be a link in the home page that would lead to the API. Please note that the data from the database must be converted to a JSON type which is raw data, therefore no formatting is required.  -->

<?php
require_once "actions/db_connect.php";
require_once "actions/a_convertJSON.php";

//Checks if GET Method was used 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = "SELECT * FROM travel_offers";
    $result = mysqli_query($connect, $sql);
    $all_travel_offers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_close($connect);

    if (count($all_travel_offers) == 0) {
        response(200, "No Data found", $all_travel_offers);
    } else {
        response(200, "Data Found", $all_travel_offers);
    }
} else {
    response(400, "Invalid Request", null);
}
?>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
    .btn-lg {
        width: 10vw;
    }

    .btn {
        font-weight: 600;
    }
</style>

<body>
    <a href="index.php"><button class='btn btn-lg btn-success' type="button">Back</button></a>
</body>

</html> -->