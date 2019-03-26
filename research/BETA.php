<?php

// BETA.php

// Check var_data
$backCheck = $_GET['var_PHP_data'];
$var_data = $_GET['var_PHP_data'];
$var_data++;

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

$sql = "SELECT * FROM `ITEMS` WHERE `ID`=" . $var_data;
$result = mysqli_query($conn, $sql);

//if (mysqli_num_rows($result) > 0) {

while ($row = mysqli_fetch_assoc($result)) {

    echo "<a href=\"" . $row["description"] . "\" target=\"_blank\"><div class=\"IMGdiv\"><img src=\"" . $row["picture"] . "\" class=\"IMAGE\"></div></a>";

    echo "<div class=\"TITLEdiv\" style=\"position:absolute;font-size: 150%;text-shadow: 0px 2px 3px #555;text-align: center;\"><h1>" . $row["name"] . "<br></h1><a style=\"text-shadow: 0px 2px 3px #555;\">" . $row["description"] . "</a></div>";

}
//} else {
 //   echo "<div class=\"IMGdiv\"><img src=\"DEFAULT.gif\" class=\"IMAGE\"></div>";
//}

//	echo "var_PHP_data: " . $numTiles . "<br>";

// Close connection
mysqli_close($conn);

?>