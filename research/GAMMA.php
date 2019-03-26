<?php

//	GAMMA.php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "MENU";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select everything from ITEMS
$sql = "SELECT * FROM `ITEMS`";

if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows($result);

    // printf("Result set has %d rows.\n",$rowcount);
    echo $rowcount;

    // Free result set
    mysqli_free_result($result);
}

// Close connection
mysqli_close($conn);

?>
