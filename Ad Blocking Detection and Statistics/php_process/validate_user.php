<?php
/*ONLY MEMBERS PAGES SHOULD INCLUDE THIS validate_user.php  FILE*/
include 'includes/php_process/db_connect.php'; //CONNECT TO DB, $con - mysqli_connect();

//CHECK IF COOKIE & SESSION ARE SET
    //IF SESSION EXIST -> VALIDATE OR LOGOUT
if (isset($_SESSION["adb_session"]) && isset($_SESSION["adb_name"])) {
    $sql ="SELECT * FROM users where session='".$_SESSION["adb_session"]."'";
    $result = mysqli_query($con, $sql) or die("ERROR: ".mysqli_error($con));

    //SESSION VALIDATE
    $count = mysqli_num_rows($result); //COUNT HOW MANY ROWS OF RESULTS: 0 - NO RESULTS, 1 - ONE MATCH
    $data = mysqli_fetch_array($result); //SET QUERY RESULTS IN AN ARRAY

    if($count==1) { //MATCH
        //ASSAIGN SQL_DATA TO VARIABLES
        $_SESSION['adb_name'] = $data['first_name']." ".$data['last_name'];
    } else { //NO MATCH
        db_unset($con); //CLOSE DB CONNECTION
        logout($base_href);
    }

    //db_unset($con); //CLOSE DB CONNECTION
}
//IF COOKIE EXIST -> CHECK COOKIE & CREATE SESSION OR LOGOUT
else if (isset($_COOKIE['adb_cookie'])) {
    $sql ="SELECT * FROM users where cookie='".$_COOKIE["adb_cookie"]."'";
    $result = mysqli_query($con, $sql) or die("ERROR: ".mysqli_error($con));

    //COOKIE VALIDATE
    $count = mysqli_num_rows($result); //COUNT HOW MANY ROWS OF RESULTS: 0 - NO RESULTS, 1 - ONE MATCH
    $data = mysqli_fetch_array($result); //SET QUERY RESULTS IN AN ARRAY

    if($count==1) { //MATCH - CREATE SESSIONS
        //ASSAIGN SQL_DATA TO VARIABLES
        $_SESSION['adb_session'] = $data['session'];
        $_SESSION['adb_name'] = $data['first_name']." ".$data['last_name'];
    } else { //NO MATCH
        db_unset($con); //CLOSE DB CONNECTION
        logout($base_href);
    }

    //db_unset($con); //CLOSE DB CONNECTION
}
//NO COOKIE OR SESSION
else {
    logout($base_href);
}
?>