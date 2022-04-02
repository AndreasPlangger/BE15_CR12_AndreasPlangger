<?php
require_once 'actions/db_connect.php';

if ($_GET['trekID']) {
    $id = $_GET['trekID'];
    $sql = "SELECT * FROM travel_offers WHERE trekID = {$id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {

        $locationName = $data['locationName'];
        $price = $data['price'];
        $description_detail = $data['description_detail'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
        $region = $data['region'];
        $duration = $data['duration'];
        $difficulty = $data['difficulty'];
        $walking_distance = $data['walking_distance'];
        $max_altitude = $data['max_altitude'];
        $picture = $data['picture'];
        $tcontent = "
        </div>
        <h2>" . $locationName . "</h2>
        <h3>Description</h3>
        <div>" . $description_detail . "</div>";
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media details</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        .manageProduct {
            margin: auto;
            width: 90%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }

        td {
            text-align: center;
            vertical-align: middle;
        }

        tr {
            text-align: center;
        }

        .custom {
            width: 135px;
        }
    </style>
</head>

<body>
    <div class="manageProduct mt-3">
        <p class='h2 text-center mt-5 mb-5'> <?= $name ?> </p>



        <div class="d-flex justify-content-between">
            <div>
                <h3>Overview</h3>
                <ul>
                    <li>Region: <?= $region ?></li>
                    <li>Duration: <?= $duration ?> days</li>
                    <li>Difficulty: <?= $difficulty ?></li>
                    <li>Max. Altitude: <?= $max_altitude ?> metres</li>
                    <li>Walking Distance: <?= $walking_distance ?> kilometers</li>
                </ul>
            </div>
            <img src='pictures/<?= $picture ?>' class='rounded mx-auto d-block mb-3' alt='<?= $name ?>' width='650px'>
            <div class='mb-3 d-flex justify-content-end'>
                <a href="index.php"><button class='btn btn-md btn-success custom' type="button">Home</button></a>
            </div>
        </div>

        <div class="w-75">
            <tbody><?= $tcontent; ?> </tbody>
        </div>


    </div>
</body>

</html>