<?php
/* INCLUDE php functions */ include "../includes/php_process/php_functions.php";
/* INCLUDE db connect */ include "../includes/php_process/db_connect.php";

/*INSERT PARAMETERS INTO DB + PROTECT SQL INJECTION (CLEAR DATA BEFORE SQL SCRIPT)*/
$client_id = check_data($_GET['client_id'], $con);
$date_time = check_data($_GET['date_time'], $con);
$web_browser = check_data($_GET['web_browser'], $con);

//----------------------SQL SCRIPT--------------------------------
$sql = "INSERT INTO ads_data (client_id, date_time,web_browser)
       VALUES ('$client_id', '$date_time', '$web_browser')";

mysqli_query($con, $sql) or die("ERROR: ".mysqli_error($con));

mysqli_close($con);

?>

<html>
    <body>
        <a href="ads_fake_insert.php">Back to INSERT PAGE</a>
    </body>
</html>