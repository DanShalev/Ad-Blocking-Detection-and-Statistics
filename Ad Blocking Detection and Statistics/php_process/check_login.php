<?php
/* INCLUDE php functions */ include "../includes/php_process/php_functions.php";
/* INCLUDE db connect */ include "../includes/php_process/db_connect.php";

//----------------------PROCESS FORM DATA--------------------------------
//PROCESS FORM DATA
$username = $_POST['field_username'];
$password = $_POST['field_password'];
if (isset($_POST['remember_me']))
    $remember_me = true;
else
    $remember_me = false;

//PROTECT SQL INJECTION (CLEAR DATA BEFORE SQL SCRIPT)
$username = check_data($username, $con);
$password = check_data($password, $con);

//ENCRYPT PASSWORD USING md5()
$password = md5($password);

//----------------------SQL SCRIPT--------------------------------
$sql ="SELECT session,first_name,last_name,cookie FROM users where username='$username' and password='$password'";
$result = mysqli_query($con, $sql) or die("ERROR: ".mysqli_error($con));

//CHECKS LOGIN DETAILS VIA DATABASE
$count=mysqli_num_rows($result);
$data = mysqli_fetch_array($result);

if($count==1){
    if ($remember_me == true)
        setcookie("adb_cookie", $data['cookie'], time()+60*60*24*30, "/");
    $_SESSION['adb_session'] = $data['session'];
    $_SESSION['adb_name'] = $data['first_name']." ".$data['last_name'];

    header("location:".$base_href."index.php"); //REDIRECT
} else {
    //$_SESSION['WrongPassword']=true;
    header("location:".$base_href."login.php");
}

mysqli_close($con);
?>