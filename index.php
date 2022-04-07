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
            <div class='card-body media' style='height: 40vh;'>
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
            background: url(pictures/bodybg1.jpg) no-repeat center 40% fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
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

        .btn-outline-primary.hover {
            background-color: #3c6ac0 !important;
            color: white;
        }

        .btn-primary {
            background-color: #3c6ac0 !important;
            color: white;
        }

        .btn-lg {
            width: 10vw;
        }

        .btn {
            font-weight: 600;
        }

        @media only screen and (max-width: 1330px) {

            .buttons {
                margin-bottom: 5vh !important;
                margin-right: 0vw !important;
                display: flex !important;
                flex-direction: column !important;
                justify-content: center !important;
                align-items: center !important;
            }

            .btn-lg {
                margin-right: 0vw !important;
                margin-bottom: 2vh !important;
                width: 140px;
                height: 45px;
            }

            .media {
                height: 50vh !important;
            }
        }

        @media only screen and (max-width: 1200px) {
            .hero-container {
                top: 50%;
                left: 50%;
            }

            @media only screen and (max-width: 375px) {
                .media {
                    height: 40vh !important;
                }
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Everest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="main">
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

        <!-- col-lg-9 col-md-7 col-sm-6 me-3 pe-5 ps-5 p-1 -->

        <div class='buttons mb-5 d-flex justify-content-center me-3'>
            <a href="create.php"><button class=' btn btn-primary btn-lg me-3' type="button"> Add Trek </button></a>
            <a href='displayAll.php'><button class=' btn btn-primary btn-lg me-3' type=" button"> Display all </button></a>
            <a href='showAll.php'><button class=' btn btn-primary btn-lg' type=" button"> Show all </button></a>
        </div>

    </div>
    <!-- FOOTER-->
    <footer class="bg-dark text-center text-white">
        <div class="container p-4">
            <!-- Section: Social media -->
            <section>
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
        <div class="text-center text-white bg-dark pb-3" style="font-weight: bold;">
            © 2022 Copyright: Andreas Plangger
        </div>
    </footer>
</body>

</html>