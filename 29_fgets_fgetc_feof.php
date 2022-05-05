<?php

//fgets() function is used for read a single line
$myfile = fopen("myfile.txt", "r");

// echo fgets($myfile);

echo "<br>";
//if we print all line with the help of fgets than---

// while($a = fgets($myfile)){
//     echo $a;
//     if($a == "."){//its not applicalbe for fgets
//         break;
//     }
// }

echo "<br>";

//fgetc print one charecter

echo fgetc($myfile);

//if we print all characters--

while($a = fgetc($myfile)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($myfile);

?>