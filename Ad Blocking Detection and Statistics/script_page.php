<?php
/* INCLUDE php functions */ include "includes/php_process/php_functions.php";
/* INCLUDE db connect */ include "includes/php_process/db_connect.php";
/* INCLUDE validate_user */ include "php_process/validate_user.php"; //REDIRECT IF THERES NO COOKIE
?>
<?php //DEFAULT VARIABLES
$month = 12;
$year = 2014;
if (isset($_GET["month"]))
    $month = check_data($_GET["month"], $con);
if (isset($_GET["year"]))
    $year = check_data($_GET["year"], $con);

db_unset($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes/headers.php";?>
    <title>AdBooster Admin</title>
</head>

<body class="full-width">

<section id="container" >
    <?php include "content/includes/page_header.php";?>

    <?php /*include "index/includes/left_sidebar.php";*/  ?>

    <?php /*MAIN CONTENT HERE****/?>
    <section id="main-content">
        <section class="wrapper">

    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body profile-information">
                    <div class="col-md-12">
                        <div class="profile-desk" style="border-right: 0">
                            <h1>AdBooster script</h1>
                            <span class="text-muted">Javascript which detects hidden ads</span>
                            <p>
                                In order to keep track of blocked ads and money loss as a result of it,
                                a simple script should be implemented in every ad page. The script will collect data
                                on every hidden ads, data wich is visible in out AdBooster Admin panel.
                            </p>
                            <pre>AdBoosterScript({
    client_id_encrypted: '123456%$%#$%#$%',
    ad_idx_encrypted: 123123131231,
    otherStuff: false,
    gridLineColor: '#dddddd',
    axes: true,
    fillOpacity:.7,
    data: [
        {period: '2010 Q1', iphone: 10, ipad: 10, itouch: 10},
        {period: '2010 Q2', iphone: 1778, ipad: 7294, itouch: 18441},
    ],
    lineColors:['#E67A77','#D9DD81','#79D1CF'],
    xkey: 'period',
    hideHover: 'auto'
});</pre>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        </section>
    </section>

    <?php include "content/includes/right_sidebar.php";?>

</section>

<?php include "includes/scripts_list.php";?>

</body>
</html>
