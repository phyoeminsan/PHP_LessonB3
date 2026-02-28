<?php
    $number1 = 500;
    $number2 = 300;

    $number1++; //number1 + 1
    echo $number1;
    echo "<br>";
    echo $number1++;
    echo "<br>";
    echo $number1;
    echo "<br>";
    echo ++$number2; // number2 + 1
    echo "<br>";

    $number1 += $number2; // $number1 = $number1 + $number2;
    echo $number1;

    $first_number = 600;
    $second_number = 400;
    $add = $first_number + $second_number;
    echo "<h3>$add</h3>";

    $first_number = 600;
    $second_number = 400;
    $sub = $first_number - $second_number;
    echo "<h3>$sub</h3>";

    $first_number = 600;
    $second_number = 400;
    $mul = $first_number * $second_number;
    echo "<h3>$mul</h3>";

    $first_number = 600;
    $second_number = 400;
    $div = $first_number / $second_number;
    echo "<h3>$div</h3>";

    $first_number = 600;
    $second_number = 400;
    $mod = $first_number % $second_number;
    echo "<h3>$mod</h3>";
?>