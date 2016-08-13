<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->

        <!--
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
                        This is a sample page

                        <h2>Members Pgae</h2>
                        <p>Hello <strong style="color: red"><?php echo $_SESSION['adb_name']; ?></strong></p>
                        <br>
                    </div>
                </section>
            </div>
        </div>-->

        <!--*****MORIS GRAPH***<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Customize Graph
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    <div class="panel-body">
                        <div id="graph-area"></div>
                    </div>
                </section>
            </div>
        </div>

        <div id="graph-area-line"></div>
        <div id="graph-donut"></div>
        <div id="graph-line"></div>
        <div id="graph-bar"></div>
        <div id="graph-area"></div>-->


        <div class="row">
            <div class="col-md-9">
                <?php /*World map*/ include 'daily_visitors/daily_visitors.php'; ?>
            </div>
            <div class="col-md-3">
                <?php /*Small pie chart*/ include 'pie_chart/small_pie_chart.php'; ?>
            </div>
            <div class="col-md-3">
                <section class="panel">
                    <div class="panel-body">
                        <div class="top-stats-panel">
                            <div class="gauge-canvas">
                                <h4 class="widget-h">Monthly Expense</h4>
                                <canvas width="160" height="100" id="gauge"></canvas>
                            </div>
                            <ul class="gauge-meta clearfix">
                                <li id="gauge-textfield" class="pull-left gauge-value"></li>
                                <li class="pull-right gauge-title">Safe</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                    <div class="mini-stat-info">
                        <span>---</span>
                        New Order Received
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                    <div class="mini-stat-info">
                        <span>--,---</span>
                        Copy Sold Today
                    </div>
                </div>
            </div>
            <?php //BLOCKED ADD FUNCTION --> SHOULD BE TRANSOFORMED INTO CLASS LATER ON



            ?>
            <div class="col-md-3">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                    <div class="mini-stat-info">
                        <span><?php //FROM daily_visitors.php (the variable - $days_visitors_array)
                            echo array_sum($days_visitors_array)*$mon_per_ad;
                            ?>$</span>
                        Blocked Ads Profit Lost
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mini-stat clearfix">
                    <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                    <div class="mini-stat-info">
                        <span><?php //FROM daily_visitors.php (the variable - $days_visitors_array)
                            echo array_sum($days_visitors_array);
                            ?></span>
                        Total Ads Blocked
                    </div>
                </div>
            </div>
        </div>

        <?php //include 'vector_map/world_vector_map.php'; ?>

    </section>
</section>
<!--main content end-->