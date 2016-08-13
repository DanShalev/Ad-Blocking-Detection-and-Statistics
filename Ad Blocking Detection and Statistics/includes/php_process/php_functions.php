<?php
session_start();
//-------------------------GENERAL DATA----------------------------
header('Content-Type: text/html; charset=utf-8');
/*<!--<base href="//adbooster.comeze.com/main/">-->*/
/*BASE HREF*/ $base_href = "//localhost:63342/AdBooster/";

//----------------------CHECKS INPUT FUNCTION--------------------------------
function check_data($data, $con)
    //$con = connection to sql db
{
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = mysqli_real_escape_string($con ,$data);
    return $data;
}

//logout function
function logout($base_href) {
    setcookie("adb_cookie", "", time()-3600, "/"); //DESTROY COOKIE
    session_destroy(); //DESTROY SESSION
    header("location:".$base_href."login.php"); //REDIRECT
    return;
}

//close_db_con function
function db_unset($con) {
    mysqli_close($con);
    unset($con);
    return;
}

//CONVERT MONTH
function month_name($int) {
    $int = htmlspecialchars($int);

    switch ($int) {
        case 1: return "January"; break;
        case 2: return "February"; break;
        case 3: return "March"; break;
        case 4: return "April"; break;
        case 5: return "May"; break;
        case 6: return "June"; break;
        case 7: return "July"; break;
        case 8: return "August"; break;
        case 9: return "September"; break;
        case 10: return "October"; break;
        case 11: return "November"; break;
        case 12: return "December"; break;
        default: return "Error";
    }
}
?>