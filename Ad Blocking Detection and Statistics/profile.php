<?php
/* INCLUDE php functions */ include "includes/php_process/php_functions.php";
/* INCLUDE db connect */ include "includes/php_process/db_connect.php";
/* INCLUDE validate_user */ include "php_process/validate_user.php"; //REDIRECT IF THERES NO COOKIE
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "includes/headers.php";?>
    <link rel="stylesheet" href="includes/bucket_a/js/morris-chart/morris.css">
    <title>Profile</title>
</head>

<body class="full-width">

<section id="container" >
    <?php include "content/includes/page_header.php";?>

    <?php /*include "index/includes/left_sidebar.php";*/  ?>

    <?php /*MAIN CONTENT HERE*/ include "content/profile/profile_content.php";?>

    <?php include "content/includes/right_sidebar.php";?>

</section>

<?php include "includes/scripts_list.php";?>
<script>
    if (window.location.search.substring(1) == "settings=yes") {
        //CHANGE TO SETTING TAB IF NEEDED
        $("#tabs").children().removeClass("active");
        $("#settings_tab").addClass("active");

        $("#overview").removeClass("active");
        $("#settings").addClass("active");
    }
</script>

<script>
    //google map
    function initialize() {
        var myLatlng = new google.maps.LatLng(-37.815207, 144.963937);
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    $('.contact-map').click(function(){

        //google map in tab click initialize
        function initialize() {
            var myLatlng = new google.maps.LatLng(-37.815207, 144.963937);
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Hello World!'
            });
        }
        google.maps.event.addDomListener(window, 'click', initialize);
    });

</script>

</body>
</html>
