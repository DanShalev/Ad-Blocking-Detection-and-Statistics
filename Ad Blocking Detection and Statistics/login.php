<?php
/* INCLUDE php functions */ include "includes/php_process/php_functions.php";
/* INCLUDE validate_user_login */ include "php_process/validate_user_login.php"; //REDIRECT IF THERES NO COOKIE
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes/headers.php";?>
    <link rel="stylesheet" href="style/login/login_style.css">

    <title>AdBooster Admin</title>

</head>

<body class="login-screen">
    <form role="form" class="form-inline" action="php_process/check_login.php" method="POST">

    <div class="lock-wrapper">
        <div id="time" class="disable_select"><br></div>
        <div class="lock-box text-center disable_select">
                <div class="lock-pwd" style="float: left; padding: 0 0 0 0; -webkit-border-radius: 5px 0 0 5px;">

                        <div class="form-group">
                            <input name="field_username" id="username-input" type="text" placeholder="Email" class="form-control lock-input">
                            <button class="btn btn-lock" type="submit">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>

                </div>

                <!--<div class="lock-name">Jonathan Smith</div>-->
                <img src="style/login/images/lock_thumb.jpg" alt="lock avatar"/>
                <div class="lock-pwd">
                        <div class="form-group">
                            <input name="field_password" type="password" placeholder="Password" class="form-control lock-input">
                            <button class="btn btn-lock" type="submit">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                </div>

        </div>
        <div class="disable_select" style="font-weight: bold">

            <div class="pull-left" style="padding-left: 40px; padding-top: 10px; color: #32323a">
                <span style="cursor: pointer">
                    <input name="remember_me" type="checkbox" id="remember_me" value="true" style="cursor: pointer">
                    <label for="remember_me" style="cursor: pointer">
                        <span style="position: relative; bottom: 2px">Remember me</span>
                    </label>
                </span>

            </div>

            <span class="pull-right" style="padding-right: 40px; margin-top: 10px">
                <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
            </span>
        </div>


        <div id="bottom_text" class="pull-left">
            Don't have an account yet?
            <a class="" href="registration.html" style="color: #1a367e; ">
                Create an account
            </a>
        </div>
    </div>
    </form>
</body>

</html>