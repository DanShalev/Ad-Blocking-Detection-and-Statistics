<?php
/*ONLY LOGIN PAGE SHOULD INCLUDE THIS validate_user_login.php  FILE*/
include 'includes/php_process/db_connect.php'; //CONNECT TO DB, $con - mysqli_connect();

//CHECK IF COOKIE IS SET
    //IF COOKIE EXIST -> CHECK COOKIE & CREATE SESSION OR LOGOUT
if (isset($_COOKIE['adb_cookie'])) {
    $sql ="SELECT * FROM users where cookie='".$_COOKIE["adb_cookie"]."'";
    $result = mysqli_query($con, $sql) or die("ERROR: ".mysqli_error($con));

    //COOKIE VALIDATE
    $count = mysqli_num_rows($result); //COUNT HOW MANY ROWS OF RESULTS: 0 - NO RESULTS, 1 - ONE MATCH
    $data = mysqli_fetch_array($result); //SET QUERY RESULTS IN AN ARRAY

    db_unset($con); //CLOSE DB CONNECTION

    if($count == 1) //MATCH - REDIRECT
        header("location:".$base_href."index.php"); //REDIRECT
    else
        logout($base_href);
}
?>