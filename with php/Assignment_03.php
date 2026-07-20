<?php
    echo "1. Print Numbers from 1 to 20";
    $i = 1;

    do
    {
        echo $i . "<br>";
        $i++;
    }
    while($i <= 20);
    echo"<br>";
    echo"----------------------------------------------------------<br>";

    echo "2. Display the Multiplication Table of a Given Number";
    $num = 5;
    $i = 1;

    do
    {
        echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
        $i++;
    }
    while($i <= 10);
    echo"<br>";
    echo"----------------------------------------------------------<br>";

    echo "3. Print All Elements of an Array";
    $weapons = array("AKM", "Pistol", "MP40", "M416", "Scar-L");

    $i = 0;

    do
    {
        echo $weapons[$i] . "<br>";
        $i++;
    }
    while($i < count($weapons));
    echo"<br>";
    echo"----------------------------------------------------------<br>";

//with for loop

    echo "1. Print Numbers from 1 to 20";
    for($i=1; $i<=20; $i++)
    {
        echo $i . "<br>";
    }
    echo"<br>";
    echo"----------------------------------------------------------<br>";

    echo "2. Display the Multiplication Table of a Given Number";
    $num = 7;

    for($i=1; $i<=10; $i++)
    {
        echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
    }
    echo"<br>";
    echo"----------------------------------------------------------<br>";

    //3. Print All Elements of an Array Using for
    $car = array("BMW", "Mercedes", "Audi", "Rollsroyce");

    for($i=0; $i<count($car); $i++)
    {
        echo $car[$i] . "<br>";
    }
    echo"<br>";
    echo"----------------------------------------------------------<br>";

    // with foreach loop

    echo "1. Print Numbers from 1 to 20"; 
    $numbers = range(1,20);

    foreach($numbers as $num)
    {
        echo $num . "<br>";
    }
    echo"<br>";
    echo"----------------------------------------------------------<br>";

    echo "2. Display the Multiplication Table of a Given Number";
    $number = 5;
    $table = range(1,10);

    foreach($table as $i)
    {
        echo $number . " x " . $i . " = " . ($number * $i) . "<br>";
    }
    echo"<br>";
    echo"----------------------------------------------------------<br>";

    echo "3. Print All Elements of an Array";
    $Padika = array("Solidmasti", "Tikhiwaffer", "Mungdal", "Paperboat", "Turture");

    foreach($Padika as $Padikas)
    {
        echo $Padikas . "<br>";
    }
    echo"<br>";
    echo"----------------------------------------------------------<br>";

    // with while loop

    echo "1. Print Numbers from 1 to 20";
    $i = 1;

    while($i <= 20)
    {
        echo $i . "<br>";
        $i++;
    }
    echo"<br>";
    echo"----------------------------------------------------------<br>";

    echo "2. Display the Multiplication Table of a Given Number";
    $num = 5;
    $i = 1;

    while($i <= 10)
    {
        echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
        $i++;
    }
    echo"<br>";
    echo"----------------------------------------------------------<br>";

    //3. Print All Elements of an Array
    $Dep= array("CS", "Chemistry", "Arts", "Commerce", "Law");

    $i = 0;

    while($i < count($Dep))
    {
        echo $Dep[$i] . "<br>";
        $i++;
    }
    echo"<br>";
    echo"----------------------------------------------------------<br>";
?>

