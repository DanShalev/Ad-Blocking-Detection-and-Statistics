<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">

        <a href="index.php" class="logo">
            <img src="style/index/images/sidelogo.png" alt="">
        </a>
        <!--<div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>-->
    </div>
    <!--logo end-->

    <div class="nav notify-row" id="top_menu">
        <!--  notification buttons start -->
        <ul class="nav top-menu">
            <?php include "page_header/settings.php"; ?>

            <?php include "page_header/inbox_dropdown.php"; ?>

            <?php include "page_header/notification.php"; ?>
        </ul>
        <!--  notification buttons end -->
    </div>
    <?php //DROPDOWN MENU
    if (basename($_SERVER['PHP_SELF']) == "index.php") {
        include "/../index/index_month_menu.php";
    }
    ?>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>

        <?php include "page_header/user_dropdown.php"; ?>
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->

</div>
</header>