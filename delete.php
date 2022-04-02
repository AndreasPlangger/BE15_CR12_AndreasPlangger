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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 70%;
        }

        .img-thumbnail {
            width: 160px !important;
            height: 160px !important;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $name ?>"></legend>
        <h5>You have selected the trek below:</h5>

        <table class='table table-striped table-bordered w-75 mt-3'>
            <thead class='table-success text-nowrap'>
                <tr>
                    <th class='h5'>Location Name</th>
                    <th class='h5'>Price</th>
                    <th class='h5'>Longitude</th>
                    <th class='h5'>Latitude</th>
                    <th class='h5'>Duration</th>
                </tr>
            </thead>

            <td><?php echo $locationName ?></td>
            <td>€ <?php echo $price ?></td>
            <td><?php echo $longitude ?></td>
            <td><?php echo $latitude ?></td>
            <td><?php echo $duration ?> Days</td>

        </table>

        <h3 class="mb-4">Do you really want to delete this trek?</h3>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="trekID" value="<?php echo $id ?>" />
            <input type="hidden" name="picture" value="<?php echo $picture ?>" />
            <button class="btn btn-danger" type="submit">Yes, delete!</button>
            <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
        </form>
    </fieldset>
</body>

</html>