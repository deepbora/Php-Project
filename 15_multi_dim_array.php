<?php

//multidimensional array- is array which contain one or moe array

// $arr = array('deep', 'raj');

//print using for loop

// for ($i=0; $i < count($arr); $i++) {
    
//     echo "$arr[$i]";
//     # code...
// }
//2 dimensional array i j
$muldim = array(
    array(1,4,6),
    array(3,7,9),
    array(8,8,5)
);

//single print

// echo $muldim[0][0];
// echo"<br>";
// echo $muldim[0][1];

//hole array content print using for loop


for ($i=0; $i < count($muldim) ; $i++) { 

    // echo var_dump($muldim[$i]);
    for ($j=0; $j < count($muldim[$i]) ; $j++) { 

        echo $muldim[$i][$j];
        echo " ";// for s
        # code...
    }
    echo "<br>";
}


?>