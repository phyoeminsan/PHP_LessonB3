<?php
    // One condition
    $x = 10;
    $y = 10;
    if($x == $y){
        echo "<h3>x and y are equal.</h3>";
    }

    // Two condition
    date_default_timezone_set('Asia/Yangon');
    $hour = date("H");
    // echo $hour;
    if($hour >= 20 && $hour <= 22){
        echo "<h3>This is lecture time.</h3>";
    }else{
        echo "<h3>This is me time.</h3>";
    }

    //ternary condition
    echo ($x == $y) ? "X and y are equal" : "X and y are not equal";

    // Many condition
    $date = date("l");
    // echo $date;
    if($date == "Mon"){
        echo "<h3>Today is Monday</h3>";
    }elseif($date == "Tue"){
        echo "<h3>Today is Tuesday</h3>";
    }elseif($date == "Wed"){
        echo "<h3>Today is Wednesday</h3>";
    }elseif($date == "Thu"){
        echo "<h3>Today is Thursday</h3>";
    }elseif($date == "Fri"){
        echo "<h3>Today is super Friday</h3>";
    }else{
        echo "<h3>Today is holiday</h3>";
    }
?>