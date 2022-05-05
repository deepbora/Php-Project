<?php

$servernam = "localhost";
$username = "root";
$password = "";
//  

$conn = mysqli_connect($servernam, $username, $password, $database);

// Creating database -

// $sql = "CREATE DATABASE deepdata";
// mysqli_query($conn, $sql);

// $sql = "DROP DATABASE deepdata";
// $result = mysqli_query($conn, $sql);

//check the database connection is successfull

// $sql = "CREATE TABLE `roll2` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
$sql = "CREATE DATABASE deepdata";
$result = mysqli_query($conn, $sql);

if($result){
    echo "succsesfully create the database";
}else{
    echo " falid to create database";
}

?>