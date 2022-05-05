<?php

echo "welcome to foreach loop <br>";

$cars = array("bmw" , "maruti" , "suzuki");
// for ($i=0; $i < count($cars) ; $i++) { 

//     echo $cars[$i];
//     echo "<br>";


//     # code...
// }

//better way to show all array values we use foreach loop;


foreach ($cars as  $value) {

    echo $value;
    echo "<br>";
    # code...
}

?>