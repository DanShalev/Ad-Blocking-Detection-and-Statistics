<?php
function brake_data($date_string) {

   $date = explode("-", substr($date_string, 0, 10));
   $time = explode(":", substr($date_string, 11));

   return array($date[0], $date[1], $date[2], $time[0], $time[1], $time[2]);
}
/*INIT DAILY VISITORS CHART TO daily_visitors_init.js JSON
/**
no need to include db_connect.php, already included in parent file
UPDATE: IMPORTED DUE TO $CON. ALTERING NEEDED*/
/* INCLUDE db connect */ include "includes/php_process/db_connect.php";

$current_month = $month;
$current_year = $year;

$data_string = "var d1 = [";
/*
    [1, 20],
    [2, 100],
    [30,100]
    ];
*/

//PULL DATA VIA USER-SESSION
//IF SESSION EXIST -> VALIDATE OR LOGOUT
if (isset($_SESSION["adb_session"])) { //Is this necessary? session maybe validated before?
    $sql ="SELECT * FROM users where session='".$_SESSION["adb_session"]."'";
    $result = mysqli_query($con, $sql) or die("ERROR: ".mysqli_error($con));

    //SESSION VALIDATE
    $count = mysqli_num_rows($result); //COUNT HOW MANY ROWS OF RESULTS: 0 - NO RESULTS, 1 - ONE MATCH
    $data = mysqli_fetch_array($result); //SET QUERY RESULTS IN AN ARRAY

    $mon_per_ad = $data['mon_per_view']; //FOR LATER FILES USE

    if($count==1) { //MATCH
        //GET USER ID, FETCH GRAPH DATA
        $client_id = $data['idx_users'];
        $sql2 ="SELECT * FROM ads_data WHERE client_id='".$client_id."' AND DATE(date_time) >= '".$current_year."-".$current_month."-01' AND DATE(date_time) <= '".$current_year."-".$current_month."-31'";
        $result2 = mysqli_query($con, $sql2) or die("ERROR: ".mysqli_error($con));

        //VISITORS NUM BY DAYS
        $days_visitors_array = array_fill(0, 32, 0); //31 cells - 0 value

        //FILER BY DATE AND TIME VIA SQL
        while($graph_data = mysqli_fetch_array($result2)){ //SET QUERY RESULTS IN AN ARRAY
            //BREAK DATES BY DAY, THEN SUM
            $current_day = brake_data($graph_data['date_time']);  //$graph_data['date_time'][2]?
            $days_visitors_array[intval($current_day[2])] += 1;  // ($current_day)?
        }

        //PRINT TO STRING
        for ($i = 1; $i <= 31; $i++) {
            $data_string = $data_string."[".$i.",".$days_visitors_array[$i]."]";

            if ($i != 31)
                $data_string = $data_string.",";
        }
        $data_string = $data_string."];";

    } else { //NO MATCH
        db_unset($con); //CLOSE DB CONNECTION
        logout($base_href);
    }

    db_unset($con); //CLOSE DB CONNECTION
}

//REWRITE daily_visitors_init.js
$visitors_file = fopen("content/index/daily_visitors/daily_visitors_init.js", "w")
or die("Unable to open file!");
fwrite($visitors_file, $data_string);
fclose($visitors_file);

?>

<section class="panel">
    <div class="panel-body">
        <div class="top-stats-panel">
            <div class="daily-visit">
                <h4 class="widget-h">DAILY ADS BLOCKED</h4>
                <div id="daily-visit-chart" style="width:100%; height: 350px; display: block">

                </div>
                <ul class="chart-meta clearfix">
                    <li class="pull-left visit-chart-value"><?php
                        echo array_sum($days_visitors_array)
                        ?></li>
                    <li class="pull-right visit-chart-title"><i class="fa fa-arrow-up"></i> ~%</li>
                </ul>
            </div>
        </div>
    </div>
</section>