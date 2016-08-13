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
    <link rel="stylesheet" href="includes/bucket_a/js/morris-chart/morris.css">
    <title>AdBooster Admin</title>
</head>

<body class="full-width">

<section id="container" >
    <?php include "content/includes/page_header.php";?>

    <?php /*include "index/includes/left_sidebar.php";*/  ?>

    <?php /*MAIN CONTENT HERE*/ include "content/index/index_content.php";?>

    <?php include "content/includes/right_sidebar.php";?>

</section>

<?php include "includes/scripts_list.php";?>
<script src="content/index/daily_visitors/daily_visitors_init.js"></script>

<script>
    jQuery('#world-vmap').vectorMap({
        map: 'world_en',
        backgroundColor: null,
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#666666',
        enableZoom: true,
        borderWidth:1,
        showTooltip: true,
        values: sample_data,
        scaleColors: ['#C8EEFF', '#006491'],
        normalizeFunction: 'polynomial'
    });
</script>

</body>
</html>
