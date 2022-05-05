<?php

/*
data type 
1.integer(not decimal number-100,400,-487)

2.strings(squence of charecters-deep,uly..)

3.float(cotains of decimal number- 300.87/...)

4.boolean(return true or false value-)

5.array(store multiple value in single variable)

6.Object

6.null(that variable that has not value assigned)

*/
//integer

$roll = 3;

echo var_dump($roll);
echo "<br>";

//strings

$name = "deep";
echo var_dump($name);
echo "<br>";

//float

$salary = "3000.56";
echo var_dump($salary);
echo "<br>";


//array

$cars = array("bmw" , "maruti suzuki" , "ranult");

var_dump($cars);
echo "<br>";
echo $cars[0];
echo "<br>";


//null

$bike = null;

echo $bike;
var_dump($bike);

?>