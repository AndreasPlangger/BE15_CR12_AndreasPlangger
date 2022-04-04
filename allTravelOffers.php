<?php

require_once 'actions/db_connect.php';

$sql = "SELECT * FROM travel_offers";
$result = mysqli_query($connect, $sql);
$all_travel_offers = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($all_travel_offers);
