<?php

//connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "deepdata";

$conn = mysqli_connect($servername, $username, $password, $database);


//update--

$sql = "UPDATE contact SET name = 'rajen' WHERE name = 'RAJDEEP';";
$result = mysqli_query($conn, $sql);
var_dump($result);//update quary return bool if we how the effected rows then
echo "<br>";

$aff = mysqli_affected_rows($conn);
echo "effacted rows are--". $aff;

if($result){
    echo "succsessfully updated";

}else{
    echo "faield";
}
//dispaly quary

$sql = "select * from contact;";
$result = mysqli_query($conn, $sql);

//display

$num = mysqli_num_rows($result);

echo var_dump($num);

if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['name'];
        echo "<br>";
    }
}






?>