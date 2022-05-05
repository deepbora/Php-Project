<?php

//global variable - global varibale are use any in the program


$a = 5; //global varibal

echo "$a <br>";

//local variable - are  only work  inside the function


function loc($a){
    //$a=9;
    echo "thi is $a";
}

loc(2);
echo "<br>";

function loc1($a){
    $a=9;// if we change the global variable inside the function then value will changed

    echo "this is $a";
    echo "<br>";

}
loc1($a);

function loc2($a){
    $s = 0;
    foreach ($a as  $value) {
        $s += $value;
    }
    return $s;

}

$r = [5, 7, 8];
$p = loc2($r);

echo $p;

// accses the globale varible in the function
echo "<br>";
$b = 8;

echo $b;
echo "<br>";
function add(){
    global $b;
    $b= 78;
    echo $b;

}

add();
echo "<br>";
echo $b;

?>