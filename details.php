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
    <title>Trek details</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .manageProduct {
            margin: auto;
            width: 100%;
        }

        .card-img-top {
            margin-bottom: 4vh !important;
            height: 30rem;
        }

        ul {
            list-style-type: none;
        }

        ul li h3 {
            margin-top: 3rem;
        }

        #map {
            height: 30rem;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div class="manageProduct mt-3">
        <p class='h1 text-center mt-5 mb-5'> <?= $locationName ?> </p>
        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <div id="map"></div>
                    <ul class="p-0">
                        <li>
                            <h3>Overview</h3>
                        </li>
                        <li>Region: <?= $region ?></li>
                        <li>Duration: <?= $duration ?> days</li>
                        <li>Difficulty: <?= $difficulty ?></li>
                        <li>Max. Altitude: <?= $max_altitude ?> metres</li>
                        <li>Walking Distance: <?= $walking_distance ?> kilometers</li>
                    </ul>
                    <div class="d-flex justify-content-beginning">
                        <a href="index.php"><button class='btn btn-md btn-success custom' type="button">Home</button></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card" style="width: 48rem;">
                        <img src='pictures/<?= $picture ?>' class='card-img-top' alt='...' width='100%'>
                        <div class="card-body">
                            <h3 class="card-title">Details:</h3>
                            <p class="card-text mt-2"><?= $description_detail ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var map;

        function initMap() {
            var locationname = {

                lat: <?= $latitude ?>,
                lng: <?= $longitude ?>

            };

            map = new google.maps.Map(document.getElementById('map'), {

                center: locationname,
                zoom: 8

            });
            var pinpoint = new google.maps.Marker({
                position: locationname,
                map: map

            });

        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
</body>

</html>