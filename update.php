<?php
require_once 'actions/db_connect.php';

if ($_GET['trekID']) {
    $id = $_GET['trekID'];



    $sql = "SELECT * FROM travel_offers WHERE trekID = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $locationName = $data['locationName'];
        $price = $data['price'];
        $description = $data['description'];
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
<html>

<head>
    <title>Edit Trek</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }

        .img-thumbnail {
            width: 160px !important;
            height: 160px !important;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $locationName ?>"></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>Location Name</th>
                    <td><input class="form-control" type="text" name="locationName" placeholder="Location Name" value="<?php echo $locationName ?>" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class="form-control" type="number" name="price" step="any" placeholder="Price" value="<?php echo $price ?>" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description" placeholder="Description" value="<?php echo $description ?>" /></td>
                </tr>
                <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="text" name="longitude" placeholder="Longitude" step="0.00001" min="-180" max="180" value="<?php echo $longitude ?>" /></td>
                </tr>
                <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="text" name="latitude" placeholder="Latitude" step="0.00001" min="-90" max="90" value="<?php echo $latitude ?>" /></td>
                </tr>
                <tr>
                <tr>
                    <th>Picture</th>
                    <td><input class="form-control" type="file" name="picture" /></td>
                </tr>
                <tr>
                    <th>Region</th>
                    <td><input class='form-control' type="text" name="region" placeholder="World region" value="<?php echo $region ?>" /></td>
                </tr>
                <tr>
                    <th>Duration</th>
                    <td><input class='form-control' type="number" name="duration" placeholder="Duration" value="<?php echo $duration ?>" /></td>
                </tr>
                <tr>
                    <th>Difficulty level</th>
                    <td><input class='form-control' type="name" name="difficulty" placeholder="easy/moderate/difficult/very difficult" value="<?php echo $difficulty ?>" /></td>
                </tr>
                <tr>
                    <th>Walking distance</th>
                    <td><input class='form-control' type="number" name="walking_distance" placeholder="Walking distance" value="<?php echo $walking_distance ?>" /></td>
                </tr>
                <tr>
                    <th>Maximum Altitude</th>
                    <td><input class='form-control' type="number" name="max_altitude" placeholder="Max Altitude" value="<?php echo $max_Altitude ?>" /></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $data['trekID'] ?>" />

                    <input type="hidden" name="picture" value="<?php echo $data['picture'] ?>" />
                    <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                    <td><a href="index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>