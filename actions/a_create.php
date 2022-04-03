<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {
    $locationName = $_POST['locationName'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $region = $_POST['region'];
    $duration = $_POST['duration'];
    $difficulty = $_POST['difficulty'];
    $walking_distance = $_POST['walking_distance'];
    $max_altitude = $_POST['max_altitude'];
    $description_detail = $_POST['description_detail'];
    $uploadError = '';
    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture']);

    $sql = "INSERT INTO travel_offers (locationName, price, description, longitude, latitude, picture, region, duration, difficulty, walking_distance, max_altitude, description_detail) VALUES ('$locationName', $price, '$description', '$longitude', '$latitude', '$picture->fileName', '$region', $duration, '$difficulty', $walking_distance, $max_altitude, '$description_detail')";

    // echo ($sql);
    // exit;


    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table table-striped'>
            <thead>
            <tr>
            <th class='h5'>Location Name</th>
            <th class='h5'>Price</th>
            <th class='h5'>Description</th>
            <th class='h5'>Longitude</th>
            <th class='h5'>Latitude</th>
            <th class='h5'>Region</th>
            <th class='h5'>Duration</th>
            <th class='h5'>Difficulty</th>
            <th class='h5'>Walking distance</th>
            <th class='h5'>Maximum Altitude</th>
            </tr>
            </thead>
            <hr>
            <tr>
            <td> $locationName </td>
            <td> $price </td>
            <td> $description </td>
            <td> $longitude </td>
            <td> $latitude </td>
            <td> $region </td>
            <td> $duration </td>
            <td> $difficulty </td>
            <td> $walking_distance </td>
            <td> $max_altitude </td>
            </tr></table><hr>";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Everest Travel | Add Trek</title>
    <?php require_once '../components/boot.php' ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Add Trek Info</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
        </div>
    </div>
</body>

</html>