<?php
require_once 'actions/db_connect.php';


$sql = "SELECT * FROM travel_offers";
$result = mysqli_query($connect, $sql);
$tbody = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .=
            "<div class='card text-center me-3' style='width: 18rem;'>
            <img class='card-img-top mt-3' src='pictures/" . $row['picture'] . " 'style='height: 22vh;'>
            <div class='card-body' style='height: 40vh;'>
                <h5 class='card-title' style='font-weight: bold;'>" . $row['locationName'] . "</h5>
                <p class='card-text'>" . $row['description'] . "</p>
            </div>
            <ul class='list-group list-group-flush'>
                <li class='list-group-item' style='font-weight: bold;'>Price:</li>
                <li class='list-group-item'>€ " . $row['price'] . "</li>
            </ul>
            <div class='card-body'>
                <a href='details.php?trekID=" . $row['trekID'] . "' class='btn btn-primary w-50 mb-1'>Details</a><br/>
                <a href='update.php?trekID=" . $row['trekID'] . "' class='btn btn-success w-50 mb-1'>Update</a><br/>
                <a href='delete.php?trekID=" . $row['trekID'] . "' class='btn btn-danger w-50 mb-1'>Delete</a>
            </div>
            </div>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVEREST Travel Agency</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            background: #f1f1f1;
            font-family: sans-serif;
        }


        .hero-image {

            position: relative;
            height: 400px;
            overflow: hidden;
            background: url("pictures/hero_alt3.jpg") no-repeat center;
            background-size: cover;
        }

        .hero-container {
            position: absolute;
            top: 30%;
            left: 82%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
        }

        .hero-container h1 {
            font-size: 72px;
            letter-spacing: 0.2 em;
            margin: 0;
        }

        .hero-container h1 span {
            border: 10px solid white;
            padding: 6px 14px;
            display: inline-block;
        }

        .des {
            margin: 20px;
            display: block;
            font-size: 32 px;
            text-shadow: 0 0 10 px black;
        }

        .nav-link p {
            margin-bottom: 0 !important;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1 rem;
        }

        .alpha {
            background-color: #3c6ac0;
            margin: 20px;
            display: block;
        }

        .alpha p {
            color: white;
            margin: 20px;
            display: block;
            font-size: 32 px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
            text-shadow: 0 0 10 px black;
        }

        /* .btn {
            color: #313131;
            padding: 10px 24px;
            font-size: 20px;
            text-decoration: none;
            background: #f1f1f1;
            border-radius: 8px;
            transition: 0.3s all;
        } */

        /* .manageProduct {
            margin: auto;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }

        td {
            text-align: left;
            vertical-align: middle;

        }

        tr {
            text-align: center;
        } */
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container d-flex align-items-center">

            <!-- LEFT ELEMENTS -->
            <ul class="navbar-nav">
                <!-- LOGO -->

                <!-- LINKS -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <p class="text bg-dark">Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <p class="text bg-dark">About us</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <p class="text bg-dark">Services</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <p class="text bg-dark">Adventures
                        </p>
                    </a>
                </li>
            </ul>
        </div>

        <!-- RIGHT ELEMENTS -->
        <div class="d-flex justify-content-end">
            <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-md-5 col-12">
                    <!-- TEXT INPUT -->
                    <div class="form-outline form-white">
                        <input type="text" id="form5Example21" class="form-control" placeholder="Search" />
                    </div>
                </div>
                <!-- SEARCH BUTTON -->
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-light">
                        <p class="text bg-dark m-0">Search</p>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO image-->
    <div class="hero-image">
        <div class="hero-container">
            <h1><span>Everest</span></h1>
            <span class="des">Travel agency</span>
        </div>

    </div>

    <!-- MIDPAGE HEADLINE -->
    <div class="alpha d-flex align-items-center justify-content-center mt-5 mb-3">
        <p>Current treks and expeditions:</p>
    </div>

    <!-- ROW AND COLUMN TEMPLATE -->
    <div id="container" class="row justify-content-center p-5 g-4 mt-0 pt-0">
        <tbody>
            <?= $tbody; ?>
        </tbody>
    </div>

    <!-- FOOTER-->
    <footer class="bg-dark text-center text-white">
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>

        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-white bg-dark p-3" style="font-weight: bold;">
            © 2022 Copyright: Andreas Plangger
        </div>
    </footer>



    <!-- <div class="manageProduct w-75 mt-3">
        <div class='mb-3'>

            <a href="create.php"><button class='btn btn-primary' type="button">Add product</button></a>
        </div>
        <p class='h2'>Products</p>

        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>

                    <th>Picture</th>
                    <th>Name</th>
                    <th>price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div> -->
</body>

</html>