<?php
    $MonthDisplay = date('F');
    $YearDisplay = date('Y');
    $weeknum = 7;
    $day = date('t');
    $month = date('n');
    $year = date ('Y');
    $startdate = date('N', mktime(0, 0, 0, $month, 1, $year));
    $currentdate = date('d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1><?php echo $MonthDisplay . " " . $YearDisplay; ?></h1>
    </div>
    <div id="calendar-body">
    <?php
        for ($j=0; $j < $startdate; $j++){
            if ($j != $startdate)
                echo '<div class="grid">--</div>';
            else 
                break;
        }
        
        for ($i =1; $i <= $day; $i++) {
                if ($currentdate == $i)
                    echo '<div class="grid current">' . $i . '</div>';
                else
                    echo '<div class="grid">' . $i . '</div>';
        }
    ?>
    </div>
    
</body>
</html>