<?php
//This will convert to a JSON Output
function response($status, $status_message, $data)
{
    $response["status"] = $status;
    $response["status_message"] = $status_message;
    $all_travel_offers["data"] = $data;

    //output JSON
    echo json_encode($all_travel_offers);
}
