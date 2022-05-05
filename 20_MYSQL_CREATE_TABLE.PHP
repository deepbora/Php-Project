<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = 'deepdata';
//connection
$conn = mysqli_connect($servername, $username, $password, $database);

//for creating table using php script
$sql = "CREATE TABLE student3 ( id INT(11) NOT NULL AUTO_INCREMENT , name VARCHAR(100) NOT NULL , PRIMARY KEY (id));";
// $sql = "SELECT * FROM student3 WHERE name = 'deep';";

$result = mysqli_query($conn, $sql);
var_dump($result);

if($result){
    echo "succsesfully create the table";
}else{
    echo " falid to create table";
}



?>