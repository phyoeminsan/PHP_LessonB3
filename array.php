<?php
    //index array
    $laptops = array("Apple","Dell","Lenovo","Asus","HP","ACER");
    print_r($laptops);
    echo "<br>";
    echo $laptops[1];
    
    echo "<br>";

    $fruits = [];
    $fruits[0] = 'Apple';
    $fruits[1] = 'Orange';
    $fruits[2] = 'Banana';
    $fruits[3] = 'Mango';
    print_r($fruits);
    echo "<br>";

    //Associative Array
    $students =[
        "name" => "Mg Mg",
        "age" => 23,
        "year" => "Second Year",
        "email" => "mgmg@gmail.com",
        "phone" => "0987654321",
    ];

    print_r($students);
    echo "<br>";
    echo $students['name'];

    foreach($students as $key => $value){
        echo "<h1>$key is $value</h1>";
    }

    //Multidemsional Array
    $foods = [
        'breakfast' => ['Mohingar','Nan Gyi Thoke','Kaung Nyin Paung'],
        'lunch' => ['Shan style rice','Rice and burmese curry'],
        'dinner' => ['Chapatis and curry','Kasuetho','lahpet thouk']
    ];
    print_r($foods);
    echo "<br>";

    foreach($foods as $key=>$value) {
        foreach($value as $k=>$v) {
            echo "<h3>$v</h3>";
        }
    }
?>