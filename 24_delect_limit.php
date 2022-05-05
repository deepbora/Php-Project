<?php

//db connection

$servername = "localhost";
$username = "root";
$password = "";
$database = "deepdata";

$conn = mysqli_connect($servername, $username, $password, $database);

//deleted sql quarry

// $sql = "DELETE  FROM contact where name ='rajen';";
$sql = "DELETE  FROM contact where name ='rajen' limit 2;";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
echo "<br>";
$aff = mysqli_affected_rows($conn);
echo "effected rows". $aff;
echo "<br>";

//massages
if($result){
    echo "succsessfully delete";
}else{
    $err = mysqli_error($conn);
    echo "failed to delete". $err;
}


?>