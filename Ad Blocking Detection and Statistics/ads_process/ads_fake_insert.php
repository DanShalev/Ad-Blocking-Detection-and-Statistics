<?php /* INCLUDE php functions */ include "../includes/php_process/php_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../includes/headers.php";?>
    <title>Blank page</title>
</head>

<body>

<section id="container" >
    <?php include "../content/index/includes/page_header.php";?>

    <?php /*MAIN CONTENT HERE*/ ?>
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Heading goes here..
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-cog"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <p>Server date and time: <?php echo date('m/d/Y h:i:s a', time()); ?></p>
                            <h2>Fake ad insert tool</h2>
                            <p>Hello <strong style="color: red">admin</strong></p>
                            <br>
                            <form method="GET" action="ads_process/recive_ad_data.php">
                                <input name="client_id" type="text" placeholder="clinet_id_hased" class="form-control">
                                <br>
                                <input name="date_time" type="text" placeholder="YYYY-MM-DD HH:MI:SS" class="form-control">
                                <br>
                                <strong>Other</strong>
                                <br>
                                <input name="web_browser" type="text" placeholder="webbrowser" class="form-control">
                                <br>
                                <input name="platform" type="text" placeholder="platform" class="form-control">
                                <br>
                                <input name="" type="text" placeholder="referrer" class="form-control">
                                <br>
                                <input name="" type="text" placeholder="ip adress" class="form-control">
                                <br>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->


</section>

<?php include "../includes/scripts_list.php";?>

</body>
</html>

