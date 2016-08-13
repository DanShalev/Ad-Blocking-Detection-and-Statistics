<div class="nav notify-row dropdown" id="top_menu">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
        <?php //$month = htmlspecialchars($_GET["month"]);
        //$year = htmlspecialchars($_GET["year"]); in index.php
        function print_href($mon, $year) {
            return "index.php?month=".$mon."&year=".$year;
        }
        echo month_name($month) ?>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <?php
        // PRINT 1-12 MONTH IN A LOOP
        for ($i = 1; $i <= 12; $i++) { ?>
            <li role="presentation"><a href="<?php echo print_href($i, $year) ?>" role="menuitem" style="padding: 3px;" tabindex="-1"><?php echo month_name($i)?></a></li>
        <?php } ?>
    </ul>
</div>
<div class="nav notify-row dropdown" id="top_menu" style="margin-left: 3px">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
        <?php echo $year ?>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation"><a href="<?php echo print_href($month, 2015) ?>" role="menuitem" style="padding: 3px;" tabindex="-1">2015</a></li>
        <li role="presentation"><a href="<?php echo print_href($month, 2014) ?>" role="menuitem" style="padding: 3px;" tabindex="-1">2014</a></li>
    </ul>
</div>