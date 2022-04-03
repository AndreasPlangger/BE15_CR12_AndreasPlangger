<?php

// Require db_connect.php (DB connection) file
require_once('actions/db_connect.php');

// This query will check do we have trekID in the table travel_offers
// for the provided $id
$sql = "SELECT * FROM travel_offers";
// echo ($sql);
// exit;
// Perform a query on the DB
$result = mysqli_query($connect, $sql);

// Fetch the query into $row
$row = mysqli_fetch_assoc($result);

// Store values into the variables
$locationName = @$row['locationName'] ?: null;
$price = @$row['price'] ?: null;
$description = @$row['description'] ?: null;
$longitude = @$row['longitude'] ?: null;
$latitude = @$row['latitude'] ?: null;
$region = @$row['region'] ?: null;
$duration = @$row['duration'] ?: null;
$difficulty = @$row['difficulty'] ?: null;
$walking_distance = @$row['walking_distance'] ?: null;
$max_altitude = @$row['max_altitude'] ?: null;



// Close the DB connection
mysqli_close($connect);
