<?php

$age = 30;

if($age>18){
    echo "you are aligible";
}else{
    echo " you are not aligible";


}
echo "<br>";

if($age>18){
    echo "you can drink alcohol";
}elseif($age>15){
    echo " you can drink only chai";
}else{
    echo "you can only drink water";
}

?>