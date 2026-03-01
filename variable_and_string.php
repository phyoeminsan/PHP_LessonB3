<?php
    // Variable 
    // Naming Rule - No Space, No Special Character!@#$%^&*(), Can't be a number on first character, Case

    $name = "John Doe";
    $address = "Yangon";

// Double quoute and Single Quoute
    echo "My name is $name";
    echo "<br>";
    echo 'I live in $address<br>';
    echo 'I live in ' . $address . '<br>'; // Concatenation
    echo '<br>';
    echo $name . ' lives in ' . $address . '<br>';

    //.=
    $first_name = 'Alan';
    echo "<p>$first_name</p>";
    $last_name = 'Walker';
    echo "<p>$last_name</p>";

    $first_name .= 'Walker';
    echo "<p>$first_name</p>";

    //trim => remove frist space and last space
    $singer = ' Taylor Swift ';
    echo "<p>My favrious singer is$singer.</p>";
    echo "<p>My favrious singer is".trim($singer).".</p>";

    // strlen() => string length
    echo strlen($singer) . "<br>";
    $singer_length = trim($singer);
    echo strlen($singer_length);
    echo "<br>";

    //strtolower(string) => change to lowercase
    echo strtolower($singer);
    echo "<br>";

    //strtoupper(string) => change to uppercase
    echo strtoupper($singer);
    echo "<br>";

    //substr(string,start(0), number) => substring
    echo substr("Hello HeinLearner",6);
    echo "<br>";
    echo substr("Hello HeinLearner",6,4);
    echo "<br>";
    echo substr("Hello HeinLearner",10,5);
    echo "<br>";

    //str_replace(search, replace, subject)
    $city = "Hello Mandalay";
    echo "<p>$city</p>";
    echo str_replace("Mandalay", "Smart City", $city);
?>