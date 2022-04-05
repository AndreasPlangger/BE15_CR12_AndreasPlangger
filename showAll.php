<!-- Bonus points:

(20) after you create your own API (displayAll.php), create a new file called showAll.php, and that file will have a button, when you click on the button, you will show all data that you got from the API using AJAX. -->

<?php
require_once 'components/boot.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show all treks</title>

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
            <button class="btn btn-lg btn-primary mb-5 me-2" id="button">Show All</button>
            <a href="index.php"><button class='btn btn-lg btn-success' type="button">Back</button></a>
        </div>
        <h1>All Treks</h1>
        <div id="result"></div>
    </div>

    <script>
        document.getElementById("button").addEventListener("click", getTreks, false); //create an eventlistener to call getUsers() function when button clicked

        function getTreks() {
            const request = new XMLHttpRequest(); //create new request
            request.open("GET", "treks.php", true); //set request as a GET method connecting to treks.php file
            request.onload = function() {
                if (this.status == 200) {
                    let allTreks = JSON.parse(this.responseText); //data received are turned to objects
                    console.log(allTreks) //data received are turned to objects
                    let output = ''; //create container variable
                    // treks.forEach(trek => {
                    for (let i in allTreks) {
                        output += `
                    <ul>
                       <li>Location name: ${allTreks[i].locationName} </li>
                       <br/>
                       <li>Price: ${allTreks[i].price} </li>
                       <li>Description: ${allTreks[i].description} </li>
                       <li>Description detailed: ${allTreks[i].description_detail} </li>
                       <li>Longitude: ${allTreks[i].longitude} </li>
                       <li>Latitude: ${allTreks[i].latitude} </li>
                       <li>Region: ${allTreks[i].region} </li>
                       <li>Duration: ${allTreks[i].duration} </li>
                       <li>Difficulty: ${allTreks[i].difficulty} </li>
                       <li>Walking distance: ${allTreks[i].walking_distance} </li>
                       <li>Max Altitude: ${allTreks[i].max_altitude} </li>
                       <li>Picture: ${allTreks[i].picture} </li>
                    </ul>
                       <br/>
                       `; //loop through each object and display their properties
                    }
                    document.getElementById('result').innerHTML = output; //print output in div "result"
                    // });
                }
            }
            request.send(); //send request
        }
    </script>
</body>

</html>