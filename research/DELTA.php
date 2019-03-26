<?php

// BETA.php

// Check numTiles
$numTiles = $_GET['PHP_numTiles'];

// Check var_data
$backCheck = $_GET['var_PHP_data'];
$var_data = $_GET['var_PHP_data'];
$var_data++;

$servername = "localhost";
$username = "ZETA";
$password = "3LegDog3";
$dbname = "GEOPOLITICS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM `DATA_PROBE` WHERE ID=" . $numTiles . "SORT BY ID DESC";
// $sql = "SELECT * FROM `DATA_PROBE` WHERE ID=" . $numTiles;
$sql = "SELECT * FROM `DATA_PROBE` WHERE ID=" . $var_data;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // <img src="" class="IMAGE">
    // "URL: ".$row["URL"]
    // <a href="___">___</a>

    // window.location.href = 'http://www.google.com'; 	Will take you to Google.
    // window.open('http://www.google.com'); 			This will open Google in a new window.

    // "$(\"#t".$numTiles."\").click(function(){
    // 		window.location.href=\"".$row["URL"]."\";
    //		});";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class=\"TITLEdiv\"><h1>" . $row["TITLE"] . "<br><a href=\"" . $row["URL"] . "\">" . $row["URL"] . "</a></h1></div>";
//	        	echo "<div class=\"IMGdiv\"><img src=\"".$row["IMG"]."\" class=\"IMAGE\"></div>";
//			echo "<script>$(\"#t".$numTiles."\").click(function(){window.open(\"".$row["URL"]."\");});</script>";
//			echo "<h2><a href=\"".$row["URL"]."\">".$row["URL"]."</a></h2>";
        echo "<a href=\"" . $row["URL"] . "\" target=\"_blank\"><div class=\"IMGdiv\"><img src=\"" . $row["IMG"] . "\" class=\"IMAGE\"></div></a>";
        //echo "<script>(function(){$(\"#ZETA\").mCustomScrollbar(\"scrollTo\",\"bottom\",{scrollInertia:3000});})();</script>";
    }
} else {
    echo "<div class=\"IMGdiv\"><img src=\"DEFAULT.gif\" class=\"IMAGE\"></div>";
}

//	echo "var_PHP_data: " . $numTiles . "<br>";

// Close connection
mysqli_close($conn);

?>