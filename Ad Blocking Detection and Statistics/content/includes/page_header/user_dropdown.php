<!-- user login dropdown start-->
<li class="dropdown">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <img alt="" src="database/userdata/profile/ynet_small.png">
        <span class="username"><?php echo $_SESSION['adb_name']; ?></span>
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu extended logout">
        <li><a href="profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
        <li><a href="script_page.php"><i class="fa fa-code"></i>AdBooster Script</a></li>
        <li><a href="profile.php?settings=yes#tabs_top"><i class="fa fa-cog"></i> Settings</a></li>
        <li><a href="php_process/logout.php"><i class="fa fa-key"></i>Log Out</a></li>
    </ul>
</li>
<!-- user login dropdown end -->