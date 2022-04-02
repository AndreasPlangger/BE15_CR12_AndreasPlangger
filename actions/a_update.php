<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {
    $id = $_POST['trekID'];
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
    //variable for upload pictures errors is initialised
    $uploadError = '';

    // echo ($locationName);
    // exit;

    $picture = file_upload($_FILES['picture']); //file_upload() called  
    if ($picture->error === 0) {
        ($_POST["picture"] == "product.png") ?: unlink("../pictures/$_POST[picture]");
        $sql = "UPDATE travel_offers SET locationName = '$locationName', price = $price, description = '$description', longitude = '$longitude', latitude =  '$latitude', region = '$region', duration = $duration, difficulty = '$difficulty', walking_distance = '$walking_distance', max_altitude = $max_altitude, picture = '$picture->fileName' WHERE trekID = {$id}";
    } else {
        $sql = "UPDATE travel_offers SET locationName = '$locationName', price = $price, description = '$description', longitude = '$longitude', latitude =  '$latitude', region = '$region', duration = $duration, difficulty = '$difficulty', walking_distance = '$walking_distance', max_altitude = $max_altitude WHERE trekID = {$id}";
    }
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error != 0) ? $picture->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
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
    <title>Update</title>
    <?php require_once '../components/boot.php' ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo ($message) ?? ''; ?></p>
            <p><?php echo ($uploadError) ?? ''; ?></p>
            <a href='../update.php?id=<?= $id; ?>'><button class="btn btn-warning" type='button'>Back</button></a>
            <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>
</body>

</html>