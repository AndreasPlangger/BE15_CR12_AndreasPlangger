<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>Everest Travel | Add Trek</title>
    <style>
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2'>Add Trek</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Name</th>
                    <td><input class='form-control' type="name" name="locationName" placeholder="Location Name" value="<?php echo $locationName ?>" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price" placeholder="Price" step="any" value="<?php echo $prize ?>" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description" placeholder="Description" value="<?php echo $description ?>" /></td>
                </tr>
                <tr>
                    <th>Description detailed</th>
                    <td><input class='form-control' type="text" name="description_detail" placeholder="Description detailed" value="<?php echo $description_detail ?>" /></td>
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
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="picture" value="<?php echo $name ?>" /></td>
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
                    <td><button class='btn btn-primary' type="submit">Add Trek</button></td>
                    <td><a href="index.php"><button class='btn btn-warning' type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>