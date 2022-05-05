<?php

/*
mysql is RDBMS- software to manage the database
 phpMyadmin is free sowtware tool to create databse
 
 Sql is a madium to comunicating the dadabase
 
*/
// connecting to the database

$servername = "localhost";
$username = "root";
$password = "";

//create a Connection

$conn = mysqli_connect($servername, $username, $password);

//dei if connection was not succsesfull

if(!$conn){
    die("sorry connection faild".mysqli_connect_error());
}else{
    echo " succsessfully connected to the database";
}


?>