<?php
    echo "<h1>Date Lessson</h1>";
    echo "<h3>Today is " . date("Y-m-d") . "</h3>";
    echo "<h3>Today is " . date("Y.m.d") . "</h3>";
    echo "<h3>Today is " . date("d.m.Y") . "</h3>"; // Use Myanmar
    echo "<h3>Today is " . date("Y/m/d") . "</h3>"; // Use Japanese
    echo "<h3>Today is " . date("d-m-y") . "</h3>";
    echo "<h3>Today is " . date("M d, Y") . "</h3>";
    echo "<h3>Today is " . date("l") . "</h3>";

    echo "<h1>Time </h1>";
    echo "<h3>The time is " . date("h:i:sa") . "</h3>";
    echo date_default_timezone_get();

    date_default_timezone_set("Asia/Yangon");
    echo "<h3>The Myanmar time is " . date("h:i:sa") . "</h3>";

    echo "<h1>String to Time</h1>";
    $today  = strtotime("today");
    echo $today . "<br>"; // count the second from 1970 to now
    echo "<h3>Today is " . date("d.m.Y", $today) . "</h3>";
    $tomorrow = strtotime("tomorrow");
    echo "<h3>Tomorrow is " . date("d.m.Y", $tomorrow) . "</h3>";
    echo "<h3>Next Saturday is " . date("d.m.Y", strtotime("next Saturday")) . "</h3>";
    echo "<h3>Next 1 week is " . date("d.m.Y", strtotime("+1 weeks")) . "</h3>";
    echo "<h3>Next 1 month is " . date("d.m.Y", strtotime("+1 month")) . "</h3>";
?>