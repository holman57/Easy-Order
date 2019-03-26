<div id="UPSILON">.</div><!DOCTYPE html>
<html>
<head>
    <!--------------------------- HEAD ---------------->

    <title>MENU</title>

    <!-- custom scrollbar stylesheet -->
    <link rel="stylesheet" href="jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="ALPHA.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="FUNCTIONS.js"></script>

</head>
<body>        <!--------------------------- BODY ------->

<script>

    // Number of rows in db

    var_data = <?php

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

        // Select everything from DATA_PROBE
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
        mysqli_close($conn);    ?>;

</script>

<!-- content div -->
<div id="ZETA" tabindex="-1"></div>

<!-- custom scrollbar plugin -->
<!-- http://manos.malihu.gr/jquery-custom-content-scroller/ -->
<script src="jquery.mCustomScrollbar.concat.min.js"></script>

<script>
    (function ($) {
        $(window).load(function () {
            $("body").mCustomScrollbar({
                theme: "inset-3",
                alwaysShowScrollbar: 2,
                advanced: {autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']"},
                keyboard: {enable: true},
                keyboard: {scrollAmount: 30},
                callbacks: {
                    onInit: function () {
                        console.log("system good");
                    },
                    //	onTotalScrollOffset: 100,
                    onTotalScroll: function () {
                        timeline();
                        console.log("END LIST");
                    }
                }
            });
            // Init first timeline
            timeline();
        });
    })(jQuery);
</script>

</body>
</html>