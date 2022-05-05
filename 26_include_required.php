<?php

// include('db.php');//warnning but is run the program if file was not in the folder... 
require('db.php');//fatal error do not run the program if file was not in the folder


//display quarry

$sql = "SELECT * FROM `contact`;";
$result = mysqli_query($conn, $sql);

echo "<br>";
//find the number of records returened

$num = mysqli_num_rows($result);
echo "total record int he table--"."$num";
echo "<br>";

//all record show code is--

while($row= mysqli_fetch_assoc($result)){
    echo $row['sno']. "name-". $row['name'].   "comment--". $row['comment'];
    echo "<br>";
}


?>