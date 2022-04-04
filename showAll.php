<!-- Bonus points:

(20) after you create your own API (displayAll.php), create a new file called showAll.php, and that file will have a button, when you click on the button, you will show all data that you got from the API using AJAX. -->

<?php
include("components/boot.php");

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

        ul {
            list-style-type: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-beginning">
            <button class="btn btn-lg btn-primary mb-5 me-2" id="showAll">Show All</button>
            <a href="index.php"><button class='btn btn-lg btn-success' type="button">Back</button></a>
        </div>
        <div id="result"></div>
        <script>
            document.getElementById("showAll").addEventListener("click", getallTravelOffers, false); //eventlistener to call the function

            function getallTravelOffers() {
                const request = new XMLHttpRequest(); //create new request
                request.open("GET", "allTravelOffers.php", true); //set GET method and connect to allTravelOffers file
                request.onload = function() {
                    if (this.status == 200) {
                        let showAll = JSON.parse(this.responseText);
                        console.log(showAll)
                        let output = '';

                        for (let i in showAll) {
                            output += `
                    <ul>
                       <li>Location name: ${showAll[i].locationName} </li>
                       <br/>
                       <li>Price: ${showAll[i].price} </li>
                       <li>Description: ${showAll[i].description} </li>
                       <li>Description detailed: ${showAll[i].description_detail} </li>
                       <li>Longitude: ${showAll[i].longitude} </li>
                       <li>Latitude: ${showAll[i].latitude} </li>
                       <li>Region: ${showAll[i].region} </li>
                       <li>Duration: ${showAll[i].duration} </li>
                       <li>Difficulty: ${showAll[i].difficulty} </li>
                       <li>Walking distance: ${showAll[i].walking_distance} </li>
                       <li>Max Altitude: ${showAll[i].max_altitude} </li>
                       <li>Picture: ${showAll[i].picture} </li>
                    </ul>
                       <br/>
                       `;
                        }
                        document.getElementById('result').innerHTML = output; //print output in div "result"
                        // });
                    }
                }
                request.send();
            }
        </script>
    </div>
</body>

</html>