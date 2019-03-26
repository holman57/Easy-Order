<?php

if (isset($_GET['var_PHP_data'])) {
    $numTiles = $_GET['var_PHP_data'];
}

echo "static tiles: " . $numTiles . "<br>";

$servername = "localhost";
$username = "holman57";
$password = "3LegDog3";
$dbname = "GEOPOLITICS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected <br>";

$sql = "SELECT TITLE, URL, IMG FROM DATA_PROBE";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo "
	        <hr> 	Title: " . $row["TITLE"] . "
	       	<br> 	URL: " . $row["URL"] . "
	       	<br> 	Image path: " . $row["IMG"] . "
	        	";
    }
} else {
    echo "0 results";
}

// Close connection
mysqli_close($conn);

echo "<br> Connection Closed <br>";

?>