<?php

// function is use for when a some statement direct dont start when it call then start
//fuction will not execute immediatly  when page is load
// fuction start with letter or underscore not number

function add(){
    $a = 10;
    $b = 11;
    $c = $a + $b;
    echo $c;
}
add();
echo "<br>";

function processmakrs($marksarry){
    $sum = 0;
    Foreach ($marksarry as  $value) {
        $sum += $value;
        
        # code...
    }
    return "$sum";

}
echo "<br>";
function avgsmakrs($marksarry){
    $sum = 0;
    $i = 0;
    foreach ($marksarry as  $value) {
        $sum += $value;
        $i++;
        
        # code...
    }
    return $sum/$i;
}

$deep = [49, 56, 59];
$raj = [37, 76, 89];

$marks = processmakrs($deep);
echo " the total marks of deep is $ $marks <br>";
$marks2 = processmakrs($raj);

// echo "$marks2 <br>";

$avg2 = avgsmakrs($deep);

echo "avg mark of deep is $avg2";

$avg = avgsmakrs($raj);

echo "avg mark of deep is $avg";
?>