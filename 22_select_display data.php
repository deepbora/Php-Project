<?php

//server connection

$servername = "localhost";
$username = "root";
$password = "";
$database = "deepdata";

$conn = mysqli_connect($servername, $username, $password, $database);

//for displaing ---sql quarry

$sql = "SELECT * FROM `contact`;";
$result = mysqli_query($conn, $sql);

//find the number of records returened

$num = mysqli_num_rows($result);
echo $num;
echo "<br>";

//Display the rows returned by the sql quarry
if($num > 0){
    // $row = mysqli_fetch_row($result);// display the data one by one...
    // var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_row($result);
    // var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_row($result);
    // var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_row($result);
    // var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_row($result);
    // var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_row($result);
    // var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_row($result);
    // var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_row($result);
    // var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_row($result);
    // var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_row($result);
    // var_dump($row);


    // $row = mysqli_fetch_all($result);// display all rows
    // // var_dump($row);
    // echo "$row= ['sno']";
    // echo "<br>";

    while($row= mysqli_fetch_assoc($result)){
        echo $row['sno']. "name-". $row['name'].   "comment--". $row['comment'];
        echo "<br>";
    }



}


?>