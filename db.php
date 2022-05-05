<?php

//connection database

$servername ="localhost";
$username = "root";
$password = "";
$database = "deepdata";

$conn =mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo "successfully connected";

}else{
    echo "faied to connect to the database";
}


?>